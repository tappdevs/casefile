<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Thanas Controller
 *
 * @property \App\Model\Table\ThanasTable $Thanas
 *
 * @method \App\Model\Entity\Thana[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ThanasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $thanas = $this->paginate($this->Thanas);

        $this->set(compact('thanas'));
    }

    /**
     * View method
     *
     * @param string|null $id Thana id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $thana = $this->Thanas->get($id, [
            'contain' => []
        ]);

        $this->set('thana', $thana);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $thana = $this->Thanas->newEntity();
        if ($this->request->is('post')) {
            $thana = $this->Thanas->patchEntity($thana, $this->request->getData());
            if ($this->Thanas->save($thana)) {
                $this->Flash->success(__('The thana has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The thana could not be saved. Please, try again.'));
        }
        $this->set(compact('thana'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Thana id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $thana = $this->Thanas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thana = $this->Thanas->patchEntity($thana, $this->request->getData());
            if ($this->Thanas->save($thana)) {
                $this->Flash->success(__('The thana has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The thana could not be saved. Please, try again.'));
        }
        $this->set(compact('thana'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Thana id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $thana = $this->Thanas->get($id);
        if ($this->Thanas->delete($thana)) {
            $this->Flash->success(__('The thana has been deleted.'));
        } else {
            $this->Flash->error(__('The thana could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
