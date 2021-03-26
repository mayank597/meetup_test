<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Participants Model
 *
 * @method \App\Model\Entity\Participant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Participant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Participant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Participant|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participant saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Participant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Participant findOrCreate($search, callable $callback = null, $options = [])
 */
class ParticipantsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('participants');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name','create')
            ->maxLength('name', 50)
            ->notEmpty('name','Name is required.');

        $validator
            ->integer('age')            
            ->notEmpty('age');

        $validator
            ->date('dob')
            ->requirePresence('dob')
            ->notEmptyString('dob','Name is required.');

        $validator
            ->scalar('profession')
            ->requirePresence('profession','create')
            ->inList('profession', ['Employed','Student'])
            ->notEmpty('profession','Profession is required.');

        $validator
            ->scalar('locality')
            ->maxLength('locality', 200)
            ->requirePresence('locality','create')
            ->notEmptyString('locality','Locality is required.');

        $validator
            ->integer('number_of_guests')
            ->requirePresence('number_of_guests','create')
            ->add('number_of_guests','custom',[
                'rule' => function ($value, $context){
                    if($value > 2){
                        return false;
                    }
                    return true;
                },
                'message' => 'You can bring +2 only with you.'
            ])
            ->notEmpty('number_of_guests','Tell us about count of guest.');

        $validator
            ->scalar('address')
            ->requirePresence('address','create')
            ->maxLength('address', 50)
            ->allowEmptyString('address');           

        return $validator;
    }
}
