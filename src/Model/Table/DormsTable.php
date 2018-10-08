<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dorms Model
 *
 * @method \App\Model\Entity\Dorm get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dorm newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dorm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dorm|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dorm|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dorm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dorm[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dorm findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DormsTable extends Table
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

        $this->setTable('dorms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('dorm_name')
            ->maxLength('dorm_name', 50)
            ->requirePresence('dorm_name', 'create')
            ->notEmpty('dorm_name');

        $validator
            ->scalar('dorm_type')
            ->maxLength('dorm_type', 10)
            ->requirePresence('dorm_type', 'create')
            ->notEmpty('dorm_type');

        $validator
            ->decimal('dorm_latitude')
            ->requirePresence('dorm_latitude', 'create')
            ->notEmpty('dorm_latitude');

        $validator
            ->decimal('dorm_longitude')
            ->requirePresence('dorm_longitude', 'create')
            ->notEmpty('dorm_longitude');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }
}
