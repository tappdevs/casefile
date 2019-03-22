<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Mamlas Controller
 *
 * @property \App\Model\Table\MamlasTable $Mamlas
 *
 * @method \App\Model\Entity\Mamla[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MamlasController extends AppController
{

  /**
   * Index method
   *
   * @return \Cake\Http\Response|void
   */
  public function index()
  {
    $this->paginate = [
      'contain' => ['Badis'],
      'maxLimit' => 10,
      'order' => [
        'id' => 'asc',
      ],
    ];
    $mamlas = $this->paginate($this->Mamlas);

    $this->set(compact('mamlas'));
  }

  /**
   * View method
   *
   * @param string|null $id Mamla id.
   * @return \Cake\Http\Response|void
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function view($id = null)
  {
    $mamla = $this->Mamlas->get($id, [
      'contain' => ['Badis', 'Ashamis', 'Dharas']
    ]);

    $this->set('mamla', $mamla);
  }

  /**
   * Add method
   *
   * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
   */
  public function add()
  {
    $mamla = $this->Mamlas->newEntity();
    if ($this->request->is('post')) {
      $mamla = $this->Mamlas->patchEntity($mamla, $this->request->getData());
      if ($this->Mamlas->save($mamla)) {
        $this->Flash->success(__('The mamla has been saved.'));

        return $this->redirect(['action' => 'add']);
      }
      $this->Flash->error(__('The mamla could not be saved. Please, try again.'));
    }
    $badis = $this->Mamlas->Badis->find('list', ['limit' => 200]);
    $ashamis = $this->Mamlas->Ashamis->find('list', ['limit' => 200]);
    $dharas = $this->Mamlas->Dharas->find('list', ['limit' => 200]);
    $this->set(compact('mamla', 'badis', 'ashamis', 'dharas'));
  }

  /**
   * Edit method
   *
   * @param string|null $id Mamla id.
   * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function edit($id = null)
  {
    $mamla = $this->Mamlas->get($id, [
      'contain' => ['Ashamis', 'Dharas']
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $mamla = $this->Mamlas->patchEntity($mamla, $this->request->getData());
      if ($this->Mamlas->save($mamla)) {
        $this->Flash->success(__('The mamla has been saved.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('The mamla could not be saved. Please, try again.'));
    }
    $badis = $this->Mamlas->Badis->find('list', ['limit' => 200]);
    $ashamis = $this->Mamlas->Ashamis->find('list', ['limit' => 200]);
    $dharas = $this->Mamlas->Dharas->find('list', ['limit' => 200]);
    $this->set(compact('mamla', 'badis', 'ashamis', 'dharas'));
  }

  /**
   * Delete method
   *
   * @param string|null $id Mamla id.
   * @return \Cake\Http\Response|null Redirects to index.
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $mamla = $this->Mamlas->get($id);
    if ($this->Mamlas->delete($mamla)) {
      $this->Flash->success(__('The mamla has been deleted.'));
    } else {
      $this->Flash->error(__('The mamla could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
  }
}
