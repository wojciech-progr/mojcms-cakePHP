<?php

// src/Controller/DefaultpagesController.php

namespace App\Controller;

class DefaultpagesController extends AppController {

  public function initialize() {
    parent::initialize();

    $this->loadComponent('Paginator');

    $this->loadModel('Categories');
    $this->loadModel('Ads');
    $this->loadModel('Articles');
    $this->loadComponent('Flash');
  }

  public function index() {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $defaultpages = $this->Paginator->paginate($this->Defaultpages->find());
    $this->set(compact('defaultpages'));
  }

  public function view($slug) {
    $pagesList = [];
    $categoriesList = [];

    $defaultpage = $this->Defaultpages->findBySlug($slug)->firstOrFail();

    // todo kategoria nieaktywna
    // pobieram wszystkie strony
    if ($defaultpage->type == 1) {
      $pagesList = $this->Defaultpages->find()->toArray();
    }

    $mainSettings = $this->Settings->find()->first();
    $this->set('mainSettings', $mainSettings);

    // todo strona nieaktywna
    // pobieram wszystkie kategorie
    if ($defaultpage->type == 1) {
      $categoriesList = $this->Categories->find()->order(['priority' => 'DESC'])->toArray();
    }

    $this->set('pagesList', $pagesList);
    $this->set('categoriesList', $categoriesList);
    $this->set(compact('defaultpage'));

    // reklamy
    $firstAdd = $this->Ads->find('all')->order('rand()')->first();
    if (!empty($firstAdd)) {
      $this->set('firstAdd', $firstAdd);
    }

    if (!empty($firstAdd)) {
      $secondAdd = $this->Ads->find('all')->order('rand()')->where(['id NOT IN' => $firstAdd->id])->first();
      if (!empty($secondAdd)) {
        $this->set('secondAdd', $secondAdd);
      }
    }

    if ($defaultpage->type == 1) {
      $this->viewBuilder()->setLayout('main');
    }

    if ($defaultpage->type == 2) {

      $articles = $this->Articles->find('all')->where(['published' => 1])->toArray();
      $this->set('articles', $articles);

      $this->viewBuilder()->setLayout('articles_list');
    }

    if ($defaultpage->type == 3) {

      $this->viewBuilder()->setLayout('contact');
    }

    if ($defaultpage->type == 4) {
      $this->viewBuilder()->setLayout('text');
    }
  }

  public function add() {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $defaultpage = $this->Defaultpages->newEntity();
    if ($this->request->is('post')) {
      $defaultpage = $this->Defaultpages->patchEntity($defaultpage, $this->request->getData());

      $defaultpage->user_id = 1;

      if ($this->Defaultpages->save($defaultpage)) {
        $this->Flash->success(__('Your defaultpage has been saved.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to add your defaultpage.'));
    }
    $this->set('defaultpage', $defaultpage);
  }

  public function edit($slug) {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $defaultpage = $this->Defaultpages->findBySlug($slug)->firstOrFail();
    if ($this->request->is(['post', 'put'])) {
      $this->Defaultpages->patchEntity($defaultpage, $this->request->getData());
      if ($this->Defaultpages->save($defaultpage)) {
        $this->Flash->success(__('Your defaultpage has been updated.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to update your defaultpage.'));
    }

    $this->set('defaultpage', $defaultpage);
  }

  public function delete($slug) {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $this->request->allowMethod(['post', 'delete']);

    $defaultpage = $this->Defaultpages->findBySlug($slug)->firstOrFail();
    if ($this->Defaultpages->delete($defaultpage)) {
      $this->Flash->success(__('The {0} defaultpage has been deleted.', $defaultpage->title));
      return $this->redirect(['action' => 'index']);
    }
  }

}
