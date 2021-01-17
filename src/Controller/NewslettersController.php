<?php

namespace App\Controller;

class NewslettersController extends AppController {

  public function initialize() {
    parent::initialize();

    $this->loadComponent('Paginator');
    $this->loadModel('Products');
    $this->loadComponent('Flash');
  }

  public function index() {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $newsletters = $this->Paginator->paginate($this->Newsletters->find());
    $this->set(compact('newsletters'));
  }

  public function add() {
    $newsletter = $this->Newsletters->newEntity();
    if ($this->request->is('post')) {
      $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());

      $newsletter->user_id = 1;

      if ($this->Newsletters->save($newsletter)) {
        $this->Flash->success(__('Your category has been saved.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to add your category.'));
    }
    $this->set('newsletter', $newsletter);
  }

  public function edit($slug) {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $newsletter = $this->Newsletters->findBySlug($slug)->firstOrFail();
    if ($this->request->is(['post', 'put'])) {
      $this->Newsletters->patchEntity($newsletter, $this->request->getData());
      if ($this->Newsletters->save($newsletter)) {
        $this->Flash->success(__('Your category has been updated.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to update your category.'));
    }

    $this->set('newsletter', $newsletter);
  }

  public function delete($slug) {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $this->request->allowMethod(['post', 'delete']);

    $newsletter = $this->Newsletters->findBySlug($slug)->firstOrFail();
    if ($this->Newsletters->delete($newsletter)) {
      $this->Flash->success(__('The {0} category has been deleted.', $newsletter->title));
      return $this->redirect(['action' => 'index']);
    }
  }

}
