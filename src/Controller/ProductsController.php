<?php

namespace App\Controller;

class ProductsController extends AppController {

  public function initialize() {
    parent::initialize();

    $this->loadComponent('Paginator');
    $this->loadModel('Categories');
    $this->loadComponent('Flash'); // Include the FlashComponent
  }

  public function index() {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $products = $this->Paginator->paginate($this->Products->find());

    $this->set(compact('products'));
  }

  public function view($slug) {
    $product = $this->Products->findBySlug($slug)->firstOrFail();
    $this->set(compact('product'));
  }

  public function add() {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $product = $this->Products->newEntity();
    if ($this->request->is('post')) {
      $product = $this->Products->patchEntity($product, $this->request->getData());

      $product->user_id = 1;

      if ($this->Products->save($product)) {
        $this->Flash->success(__('Your product has been saved.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to add your product.'));
    }

    $options = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title']);

    $this->set('options', $options);
    $this->set('product', $product);
  }

  public function edit($slug) {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $product = $this->Products->findBySlug($slug)->firstOrFail();
    if ($this->request->is(['post', 'put'])) {
      $this->Products->patchEntity($product, $this->request->getData());
      if ($this->Products->save($product)) {
        $this->Flash->success(__('Your product has been updated.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Unable to update your product.'));
    }

    $options = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title']);

    $this->set('options', $options);
    $this->set('product', $product);
  }

  public function delete($slug) {
    if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $this->request->allowMethod(['post', 'delete']);

    $product = $this->Products->findBySlug($slug)->firstOrFail();
    if ($this->Products->delete($product)) {
      $this->Flash->success(__('The {0} product has been deleted.', $product->title));
      return $this->redirect(['action' => 'index']);
    }
  }

}
