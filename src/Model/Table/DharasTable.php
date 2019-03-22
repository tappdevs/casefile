<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dharas Model
 *
 * @property \App\Model\Table\MamlasTable|\Cake\ORM\Association\BelongsToMany $Mamlas
 *
 * @method \App\Model\Entity\Dhara get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dhara newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dhara[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dhara|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dhara|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dhara patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dhara[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dhara findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DharasTable extends Table
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

        $this->setTable('dharas');
        $this->setDisplayField('number');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Mamlas', [
            'foreignKey' => 'dhara_id',
            'targetForeignKey' => 'mamla_id',
            'joinTable' => 'mamlas_dharas'
        ]);
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
            ->scalar('number')
            ->maxLength('number', 50)
            ->allowEmptyString('number')
            ->add('number', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('detail')
            ->allowEmptyString('detail');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['number']));

        return $rules;
    }
}
