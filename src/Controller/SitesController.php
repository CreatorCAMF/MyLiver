<?php

namespace App\Controller;

class SitesController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $sites = $this->Paginator->paginate($this->Sites->find());
        $this->set(compact('sites'));
    }

    public function add()
    {
        $site = $this->Sites->newEntity();
        if ($this->request->is('post')) {
            $site = $this->Sites->patchEntity($site, $this->request->getData());

            if ($this->Sites->save($site)) {
                $this->Flash->success(__('Your site has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your site.'));
        }
        $this->set('bar_status', array("","","","active",""));
        $this->set('site', $site);
    }

    public function edit($id)
    {
        $site = $this->Sites->findById($site)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Sites->patchEntity($site, $this->request->getData());
            if ($this->Sites->save($site)) {
                $this->Flash->success(__('Your site has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your site.'));
        }

        $this->set('site', $site);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $site = $this->Site->findById($id)->firstOrFail();
        if ($this->Sites->delete($site)) {
            $this->Flash->success(__('The {0} site has been deleted.', $site->site));
            return $this->redirect(['action' => 'index']);
        }
    }
}