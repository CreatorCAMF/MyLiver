<?php
// src/Controller/DbsController.php

namespace App\Controller;

class DbsController extends AppController
{

    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // The add and tags actions are always allowed to logged in users.
        if (in_array($action, ['index','add','edit','delete'])) {
            return true;
        }
        return 'Admin' == $user['role'];
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $dbs = $this->Paginator->paginate($this->Dbs->find('dbs'));
        $this->set('bar_status', array("","","active","","","",""));
        $this->set(compact('dbs'));
    }

    public function add()
    {
        $db = $this->Dbs->newEntity();
        if ($this->request->is('post')) {
            $db = $this->Dbs->patchEntity($db, $this->request->getData());

            if ($this->Dbs->save($db)) {
                $this->Flash->success(__('Your acount has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your db.'));
        }
        $this->set('bar_status', array("","","","","active","",""));
        $this->set('db', $db);
    }

    public function edit($id)
    {
        $db = $this->Dbs->findById($id)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Dbs->patchEntity($db, $this->request->getData());
            if ($this->Dbs->save($db)) {
                $this->Flash->success(__('Your user has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your db.'));
        }

        $this->set('db', $db);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $db = $this->Dbs->findById($id)->firstOrFail();
        if ($this->Dbs->delete($db)) {
            $this->Flash->success(__('The {0} DB has been deleted.', $db->db_name));
            return $this->redirect(['action' => 'index']);
        }
    }
}