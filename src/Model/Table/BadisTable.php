<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Badis Model
 *
 * @method \App\Model\Entity\Badi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Badi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Badi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Badi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Badi|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Badi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Badi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Badi findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BadisTable extends Table
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

        $this->setTable('badis');
        $this->setDisplayField('name');
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->scalar('identity_no')
            ->maxLength('identity_no', 50)
            ->allowEmptyString('identity_no');

        $validator
            ->scalar('address')
            ->maxLength('address', 50)
            ->allowEmptyString('address');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
