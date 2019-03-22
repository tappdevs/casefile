<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mamlas Model
 *
 * @property \App\Model\Table\BadisTable|\Cake\ORM\Association\BelongsTo $Badis
 * @property \App\Model\Table\AshamisTable|\Cake\ORM\Association\BelongsToMany $Ashamis
 * @property \App\Model\Table\DharasTable|\Cake\ORM\Association\BelongsToMany $Dharas
 *
 * @method \App\Model\Entity\Mamla get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mamla newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mamla[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mamla|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mamla|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mamla patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mamla[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mamla findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MamlasTable extends Table
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

        $this->setTable('mamlas');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Badis', [
            'foreignKey' => 'badis_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Ashamis', [
            'foreignKey' => 'mamla_id',
            'targetForeignKey' => 'ashami_id',
            'joinTable' => 'mamlas_ashamis'
        ]);
        $this->belongsToMany('Dharas', [
            'foreignKey' => 'mamla_id',
            'targetForeignKey' => 'dhara_id',
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
            ->scalar('location')
            ->maxLength('location', 255)
            ->requirePresence('location', 'create')
            ->allowEmptyString('location', false);

        $validator
            ->scalar('body')
            ->allowEmptyString('body');

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
        $rules->add($rules->existsIn(['badis_id'], 'Badis'));

        return $rules;
    }
}
