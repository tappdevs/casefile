<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Badis Controller
 *
 * @property \App\Model\Table\BadisTable $Badis
 *
 * @method \App\Model\Entity\Badi[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BadisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $badis = $this->paginate($this->Badis);

        $this->set(compact('badis'));
    }

    /**
     * View method
     *
     * @param string|null $id Badi id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $badi = $this->Badis->get($id, [
            'contain' => []
        ]);

        $this->set('badi', $badi);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $badi = $this->Badis->newEntity();
        if ($this->request->is('post')) {
            $badi = $this->Badis->patchEntity($badi, $this->request->getData());
            if ($this->Badis->save($badi)) {
                $this->Flash->success(__('The badi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The badi could not be saved. Please, try again.'));
        }
        $this->set(compact('badi'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Badi id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $badi = $this->Badis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $badi = $this->Badis->patchEntity($badi, $this->request->getData());
            if ($this->Badis->save($badi)) {
                $this->Flash->success(__('The badi has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The badi could not be saved. Please, try again.'));
        }
        $this->set(compact('badi'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Badi id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $badi = $this->Badis->get($id);
        if ($this->Badis->delete($badi)) {
            $this->Flash->success(__('The badi has been deleted.'));
        } else {
            $this->Flash->error(__('The badi could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
