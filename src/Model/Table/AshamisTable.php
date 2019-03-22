<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ashamis Model
 *
 * @property \App\Model\Table\MamlasTable|\Cake\ORM\Association\BelongsToMany $Mamlas
 *
 * @method \App\Model\Entity\Ashami get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ashami newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ashami[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ashami|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ashami|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ashami patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ashami[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ashami findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AshamisTable extends Table
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

        $this->setTable('ashamis');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Mamlas', [
            'foreignKey' => 'ashami_id',
            'targetForeignKey' => 'mamla_id',
            'joinTable' => 'mamlas_ashamis'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('father')
            ->maxLength('father', 255)
            ->requirePresence('father', 'create')
            ->allowEmptyString('father', false);

        $validator
            ->scalar('mother')
            ->maxLength('mother', 255)
            ->requirePresence('mother', 'create')
            ->allowEmptyString('mother', false);

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->allowEmptyString('address', false);

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
