<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ashamis Controller
 *
 * @property \App\Model\Table\AshamisTable $Ashamis
 *
 * @method \App\Model\Entity\Ashami[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AshamisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ashamis = $this->paginate($this->Ashamis);

        $this->set(compact('ashamis'));
    }

    /**
     * View method
     *
     * @param string|null $id Ashami id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ashami = $this->Ashamis->get($id, [
            'contain' => ['Mamlas']
        ]);

        $this->set('ashami', $ashami);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ashami = $this->Ashamis->newEntity();
        if ($this->request->is('post')) {
            $ashami = $this->Ashamis->patchEntity($ashami, $this->request->getData());
            if ($this->Ashamis->save($ashami)) {
                $this->Flash->success(__('The ashami has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ashami could not be saved. Please, try again.'));
        }
        $mamlas = $this->Ashamis->Mamlas->find('list', ['limit' => 200]);
        $this->set(compact('ashami', 'mamlas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ashami id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ashami = $this->Ashamis->get($id, [
            'contain' => ['Mamlas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ashami = $this->Ashamis->patchEntity($ashami, $this->request->getData());
            if ($this->Ashamis->save($ashami)) {
                $this->Flash->success(__('The ashami has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ashami could not be saved. Please, try again.'));
        }
        $mamlas = $this->Ashamis->Mamlas->find('list', ['limit' => 200]);
        $this->set(compact('ashami', 'mamlas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ashami id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ashami = $this->Ashamis->get($id);
        if ($this->Ashamis->delete($ashami)) {
            $this->Flash->success(__('The ashami has been deleted.'));
        } else {
            $this->Flash->error(__('The ashami could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
