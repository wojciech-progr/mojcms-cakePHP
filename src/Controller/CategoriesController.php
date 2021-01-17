<?php

namespace App\Controller;

class CategoriesController extends AppController {

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
    $categorys = $this->Paginator->paginate($this->Categories->find());
    $this->set(compact('categorys'));
  }

  public function view($slug) {
    $productList = [];

    $category = $this->Categories->findBySlug($slug)->firstOrFail();

    $productList = $this->Products->find()->where(['category_id' => $category->id])->toArray();
    $categoriesList = $this->Categories->find()->order(['priority' => 'DESC'])->toArray();


    $this->set('productList', $productList);
    $this->set('categoriesList', $categoriesList);
    $this->set(compact('category'));
  }

  public function add() {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $category = $this->Categories->newEntity();
    if ($this->request->is('post')) {
      $category = $this->Categories->patchEntity($category, $this->request->getData());

      $category->user_id = 1;

      if ($this->Categories->save($category)) {
        $this->Flash->success(__('Your category has been saved.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to add your category.'));
    }
    $this->set('category', $category);
  }

  public function edit($slug) {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $category = $this->Categories->findBySlug($slug)->firstOrFail();
    if ($this->request->is(['post', 'put'])) {
      $this->Categories->patchEntity($category, $this->request->getData());
      if ($this->Categories->save($category)) {
        $this->Flash->success(__('Your category has been updated.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to update your category.'));
    }

    $this->set('category', $category);
  }

  public function delete($slug) {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $this->request->allowMethod(['post', 'delete']);

    $category = $this->Categories->findBySlug($slug)->firstOrFail();
    if ($this->Categories->delete($category)) {
      $this->Flash->success(__('The {0} category has been deleted.', $category->title));
      return $this->redirect(['action' => 'index']);
    }
  }

}
