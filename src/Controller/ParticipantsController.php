<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Http\Exception\NotFoundException;

/**
 * Participants Controller
 *
 * @property \App\Model\Table\ParticipantsTable $Participants
 *
 * @method \App\Model\Entity\Participant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParticipantsController extends AppController
{
    public $paginate = [
        'limit' => 2,
        'order' => [
            'id' => 'desc'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Paginator');

        $this->response->header('Access-Control-Allow-Origin','*');
        $this->response->header('Access-Control-Allow-Methods','*');
        $this->response->header('Access-Control-Allow-Headers','X-Requested-With');
        $this->response->header('Access-Control-Allow-Headers','Content-Type');
        $this->response->header('Access-Control-Max-Age','172800');
    }

    public function index()
    {
        try {
            //Set Paginatiojn
            $participants = $this->Participants->find('all');
            $participants = $this->paginate($participants);
            $success = true;
        } catch (NotFoundException $e) {
            //When page not found then return with blank participants
            $participants = [];
            $success = false;
        }
        
        $this->set([
            'success' => true,
            'participants' => $participants,
            '_serialize' => ['success','participants']
        ]);
    }
    

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);        

        $postedData = $this->request->getData();

        //Set js Date Object String into Mysql Date String
        $jsDob = $postedData['dob'];
        $date = \DateTime::createFromFormat('D M d Y H:i:s T +',$jsDob);
        $postedData['dob'] = $date->format('Y-m-d');

        //Get Age From DOB
        $from = new \DateTime($postedData['dob']);
        $to   = new \DateTime('today');
        $postedData['age'] = $from->diff($to)->y;

        $success = true;
        $participants = $this->Participants->newEntity($postedData);
        if ($this->Participants->save($participants)) {
            $message = 'Data Saved successfully.';
        } else {
            $success = false;
            $message = 'Error';
            $errors = $participants->getErrors();
            foreach($errors as $err){
                foreach($err as $e){
                    $message = $e;
                    break 2;
                }
            }
            
        }
        $this->set([
            'success' => $success,
            'message' => $message,
            'participants' => $participants,
            '_serialize' => ['success','message', 'participants']
        ]);
    }

    public function edit($id)
    {

        $this->request->allowMethod(['patch', 'post', 'PUT']);
        $participants = $this->Participants->get($id);

        $postedData = $this->request->getData();

        //Set js Date Object String into Mysql Date String
        $jsDob = $postedData['dob'];
        $date = \DateTime::createFromFormat('D M d Y H:i:s T +',$jsDob);
        $postedData['dob'] = $date->format('Y-m-d');

        //Get Age From DOB
        $from = new \DateTime($postedData['dob']);
        $to   = new \DateTime('today');

        $postedData['age'] = $from->diff($to)->y;

        $success = true;

        $participants = $this->Participants->patchEntity($participants, $postedData);
        if ($this->Participants->save($participants)) {
            $message = 'Update Successfully';
        } else {
            $success = false;
            $message = 'Error';
            $errors = $participants->getErrors();

            foreach($errors as $err){
                foreach($err as $e){
                    $message = $e;
                    break 2;
                }
            }
        }
        $this->set([
            'success' => $success,
            'message' => $message,
            '_serialize' => ['success','message']
        ]);
    }
    
}
