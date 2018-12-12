<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class AcountsController extends AppController
{

    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // The add and tags actions are always allowed to logged in users.
        if (in_array($action, ['acountsdb','acountssites','add','edit','delete'])) {
            return true;
        }
        return 'Admin' == $user['role'];
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $acounts = $this->Acounts->find();
        $this->set(compact('acounts'));
    }

    

    public function acountsdb()
    {   
        $acountRegisters = TableRegistry::get('Acounts');
        $acounts = $acountRegisters->find('acountsDBs', ['user_id' => $this->Auth->user()['id']]);
        $this->set('bar_status', array("active","","","","","",""));
        $this->set('acounts', $acounts->toArray());
    }

    public function acountssites()
    {   
        $acountRegisters = TableRegistry::get('Acounts');
        $acounts = $acountRegisters->find('acountsSites', ['user_id' => $this->Auth->user()['id']]);
        $this->set('bar_status', array("","active","","","","","",""));
        $this->set('acounts', $acounts->toArray());
    }

    public function add()
    {
        $acount = $this->Acounts->newEntity();
        if ($this->request->is('post')) {
            $acount = $this->Acounts->patchEntity($acount, $this->request->getData());

            if ($this->Acounts->save($acount)) {
                $this->Flash->success(__('Your acount has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your user.'));
        }

        $dbs = $this->Acounts->Dbs->find('list');
        $sites = $this->Acounts->Sites->find('list');

        // Set tags to the view context
        $this->set('bar_status', array("","","","","","","active"));
        $this->set('user_id', $this->Auth->user()['id']);
        $this->set('dbs', $dbs);
        $this->set('sites', $sites);
        $this->set('acount', $acount);
    }

    public function edit($id)
    {
        $acount = $this->Acounts->findById($id)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Acounts->patchEntity($acount, $this->request->getData());
            if ($this->Acounts->save($acount)) {
                $this->Flash->success(__('Your acount has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your acount.'));
        }
        $dbs = $this->Acounts->Dbs->find('list');
        $sites = $this->Acounts->Sites->find('list');

        // Set tags to the view context
        $this->set('user_id', $this->Auth->user()['id']);
        $this->set('dbs', $dbs);
        $this->set('sites', $sites);
        $this->set('acount', $acount);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $acount = $this->Acounts->findById($id)->firstOrFail();
        if ($this->Acounts->delete($acount)) {
            $this->Flash->success(__('The {0} acount has been deleted.', $acount->name));
            return $this->redirect(['action' => 'index']);
        }
    }

}