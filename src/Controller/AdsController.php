<?php

// src/Controller/AdsController.php

namespace App\Controller;

class AdsController extends AppController {

  public function initialize() {
    parent::initialize();

    $this->loadComponent('Paginator');

    $this->loadComponent('Flash');
  }

  public function index() {

    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $ads = $this->Paginator->paginate($this->Ads->find());
    $this->set(compact('ads'));
  }

  public function add() {

    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }

    $ad = $this->Ads->newEntity();
    if ($this->request->is('post')) {
      $ad = $this->Ads->patchEntity($ad, $this->request->getData());

      $ad->user_id = 1;

      if ($this->Ads->save($ad)) {
        $this->Flash->success(__('Your ad has been saved.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to add your ad.'));
    }
    $this->set('ad', $ad);
  }

  public function edit($id) {

    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $ad = $this->Ads->find()->where(['id' => $id])->first();

    if ($this->request->is(['post', 'put'])) {
      $this->Ads->patchEntity($ad, $this->request->getData());
      if ($this->Ads->save($ad)) {
        $this->Flash->success(__('Edycja powiodła się.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Edycja nie udała się.'));
    }

    $this->set('ad', $ad);
  }

  public function delete($id) {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $this->request->allowMethod(['post', 'delete']);

    $ad = $this->Ads->find()->where(['id' => $id])->firstOrFail();
    if ($this->Ads->delete($ad)) {
      $this->Flash->success(__('The {0} ad has been deleted.', $ad->title));
      return $this->redirect(['action' => 'index']);
    }
  }

}
