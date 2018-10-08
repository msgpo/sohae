<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dorms Controller
 *
 * @property \App\Model\Table\DormsTable $Dorms
 *
 * @method \App\Model\Entity\Dorm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DormsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dorms = $this->paginate($this->Dorms);

        $this->set(compact('dorms'));
    }

    /**
     * View method
     *
     * @param string|null $id Dorm id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dorm = $this->Dorms->get($id, [
            'contain' => []
        ]);

        $this->set('dorm', $dorm);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dorm = $this->Dorms->newEntity();
        if ($this->request->is('post')) {
            $dorm = $this->Dorms->patchEntity($dorm, $this->request->getData());
            if ($this->Dorms->save($dorm)) {
                $this->Flash->success(__('The dorm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dorm could not be saved. Please, try again.'));
        }
        $this->set(compact('dorm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dorm id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dorm = $this->Dorms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dorm = $this->Dorms->patchEntity($dorm, $this->request->getData());
            if ($this->Dorms->save($dorm)) {
                $this->Flash->success(__('The dorm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dorm could not be saved. Please, try again.'));
        }
        $this->set(compact('dorm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dorm id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dorm = $this->Dorms->get($id);
        if ($this->Dorms->delete($dorm)) {
            $this->Flash->success(__('The dorm has been deleted.'));
        } else {
            $this->Flash->error(__('The dorm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
