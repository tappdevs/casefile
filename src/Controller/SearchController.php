<?php

namespace App\Controller;

use App\Controller\AppController;

use App\Model\Custom\TappUpload;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class SearchController extends AppController
{
  public function index()
  {
    $mamlas = TableRegistry::get('MamlasAshamis');

    $ashamis_name = TableRegistry::get('Ashamis')->find('list', [
      'keyField' => 'id',
      'valueField' => 'name'
    ])->toArray();

    $ashamis_father = TableRegistry::get('Ashamis')->find('list', [
      'keyField' => 'id',
      'valueField' => 'father'
    ])->toArray();

    $mamlas_no = $mamlas->find('list', [
      'keyField' => 'id',
      'valueField' => 'mamla_no'
    ])->toList();

    $mamla_dhara = TableRegistry::get('Dharas')->find('list', [
      'keyField' => 'id',
      'valueField' => 'number'
    ])->toList();

    $mamla_thana = TableRegistry::get('Thanas')->find('list', [
      'keyField' => 'id',
      'valueField' => 'name'
    ])->toList();

//pr($mamla_dhara);die;
//$ta_profile = TableRegistry::getTableLocator()->get('Mamlas');
    //pr($ta_profile);die;

    $searchData = $mamlas->searchMamlas($this->request->data());


    $query = $mamlas->find();

    //pr($query->toArray());

    $mamlas = $this->paginate($query);
//pr($mamlas);die;
    $this->set(compact('mamlas', 'ashamis_name', 'ashamis_father', 'mamlas_no', 'mamla_dhara', 'mamla_thana'));

  }
}
