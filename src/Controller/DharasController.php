<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dharas Controller
 *
 * @property \App\Model\Table\DharasTable $Dharas
 *
 * @method \App\Model\Entity\Dhara[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DharasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dharas = $this->paginate($this->Dharas);

        $this->set(compact('dharas'));
    }

    /**
     * View method
     *
     * @param string|null $id Dhara id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dhara = $this->Dharas->get($id, [
            'contain' => ['Mamlas']
        ]);

        $this->set('dhara', $dhara);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dhara = $this->Dharas->newEntity();
        if ($this->request->is('post')) {
            $dhara = $this->Dharas->patchEntity($dhara, $this->request->getData());
            if ($this->Dharas->save($dhara)) {
                $this->Flash->success(__('The dhara has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dhara could not be saved. Please, try again.'));
        }
        $mamlas = $this->Dharas->Mamlas->find('list', ['limit' => 200]);
        $this->set(compact('dhara', 'mamlas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dhara id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dhara = $this->Dharas->get($id, [
            'contain' => ['Mamlas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dhara = $this->Dharas->patchEntity($dhara, $this->request->getData());
            if ($this->Dharas->save($dhara)) {
                $this->Flash->success(__('The dhara has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dhara could not be saved. Please, try again.'));
        }
        $mamlas = $this->Dharas->Mamlas->find('list', ['limit' => 200]);
        $this->set(compact('dhara', 'mamlas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dhara id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dhara = $this->Dharas->get($id);
        if ($this->Dharas->delete($dhara)) {
            $this->Flash->success(__('The dhara has been deleted.'));
        } else {
            $this->Flash->error(__('The dhara could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
