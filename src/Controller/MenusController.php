<?php

namespace App\Controller;

class MenusController extends AppController {

  public function initialize() {
    parent::initialize();

    $this->loadComponent('Paginator');
    $this->loadComponent('Flash');
  }

  public function index() {
     if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $menus = $this->Paginator->paginate($this->Menus->find());
    $this->set(compact('menus'));
  }

  public function add() {
     if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $menu = $this->Menus->newEntity();
    if ($this->request->is('post')) {
      $menu = $this->Menus->patchEntity($menu, $this->request->getData());

      if ($this->Menus->save($menu)) {
        $this->Flash->success(__('Zapis udany.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Dodawanie nie powiodło się..'));
    }
    $this->set('menu', $menu);
    
    // opcje dla kontrolki menu
    $this->set('options', ['1' => 'Górne menu', '2' => 'Dolne menu kolumna 1', '3' => 'Dolne menu kolumna 2', '4' => 'Dolne menu kolumna 3']);
  }

  public function edit($id) {  
     if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $menu = $this->Menus->find()->where(['id' => $id])->first();
    
    if ($this->request->is(['post', 'put'])) {
      $this->Menus->patchEntity($menu, $this->request->getData());
      if ($this->Menus->save($menu)) {
        $this->Flash->success(__('Edycja powiodła się.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Edycja nie udała się.'));
    }

    $this->set('menu', $menu);
    
    // opcje dla kontrolki menu
    $this->set('options', ['1' => 'Górne menu', '2' => 'Dolne menu kolumna 1', '3' => 'Dolne menu kolumna 2', '4' => 'Dolne menu kolumna 3']);
  }

  public function delete($id) {
     if ($this->request->session()->read('logged') != true) {
      $this->redirect('/');
    }
    $this->request->allowMethod(['post', 'delete']);

    $menu = $this->Menus->find()->where(['id' => $id])->firstOrFail();
    if ($this->Menus->delete($menu)) {
      $this->Flash->success(__('The {0} menu has been deleted.', $menu->title));
      return $this->redirect(['action' => 'index']);
    }
  }

}
