<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

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

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $queryData = $this->request->getQuery();
        $query = $this->Participants->find('all');
        if(!empty($queryData['name'])){
            $query->where(['name' => $queryData['name']]);
        }
        else {
            $queryData['name'] = '';
        }

        if(!empty($queryData['locality'])){
            $query->where(['locality' => $queryData['locality']]);
        }
        else{
            $queryData['locality'] = '';
        }

        $participants = $this->paginate($query);
        $this->set(compact('participants','queryData'));
    }

    

    /**
     * Edit method
     *
     * @param string|null $id Participant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $participant = $this->Participants->get($id, [
            'contain' => [],
        ]);
        $this->set(compact('participant'));
    }
}
