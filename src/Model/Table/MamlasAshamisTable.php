<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MamlasAshamis Model
 *
 * @property \App\Model\Table\MamlasTable|\Cake\ORM\Association\BelongsTo $Mamlas
 * @property \App\Model\Table\AshamisTable|\Cake\ORM\Association\BelongsTo $Ashamis
 *
 * @method \App\Model\Entity\MamlasAshami get($primaryKey, $options = [])
 * @method \App\Model\Entity\MamlasAshami newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MamlasAshami[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MamlasAshami|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MamlasAshami|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MamlasAshami patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MamlasAshami[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MamlasAshami findOrCreate($search, callable $callback = null, $options = [])
 */
class MamlasAshamisTable extends Table
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

    $this->setTable('mamlas_ashamis');
    $this->setDisplayField('mamla_id');
    $this->setPrimaryKey(['mamla_id', 'ashami_id']);

    $this->belongsTo('Mamlas', [
      'foreignKey' => 'mamla_id',
      'joinType' => 'INNER'
    ]);
    $this->belongsTo('Ashamis', [
      'foreignKey' => 'ashami_id',
      'joinType' => 'INNER'
    ]);
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
    $rules->add($rules->existsIn(['mamla_id'], 'Mamlas'));
    $rules->add($rules->existsIn(['ashami_id'], 'Ashamis'));

    return $rules;
  }

  public function searchMamlas($search)
  {

    if ($search) {
      pr($search);
      $ashami_id = $search['ashami_name'];
      $ashami_father = $search['ashami_father'];
      $mamla_no = $search['mamla_no'];
      $mamla_dhara = isset($search['mamla_dhara']) ? $search['mamla_dhara'] : '';
      $mamla_thana = $search['mamla_thana'];

      $join = [
        'table' => 'Ashamis',
        'type' => 'LEFT',
        'conditions' => 'MamlasAshamis.ashami_id = ashamis.id',
      ];

      $Mamlas = $this->find()
        ->join($join)
        ->where(['MamlasAshamis.ashami_id' => $ashami_id, 'Ashamis.id' => $ashami_father])
        ->select('ashamis.name');

      echo count($Mamlas->toList());
      pr($Mamlas->toList());
      pr($Mamlas);
      die;
    }
  }


}
