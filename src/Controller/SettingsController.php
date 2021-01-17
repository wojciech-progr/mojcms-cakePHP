<?php
namespace App\Controller;

class SettingsController extends AppController {

  public function initialize() {
    parent::initialize();

    $this->loadComponent('Paginator');
    $this->loadComponent('Flash');
  }

  public function index() {
    $settings = $this->Paginator->paginate($this->Settings->find());
    $this->set(compact('settings'));
  }

  public function edit() {
    
    $setting = $this->Settings->find()->first();
    
    if ($this->request->is(['post', 'put'])) {
      $this->Settings->patchEntity($setting, $this->request->getData());
      if ($this->Settings->save($setting)) {
        $this->Flash->success(__('Edycja powiodła się.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Edycja nie udała się.'));
    }

    $this->set('setting', $setting);
  }
  
  public function checkpassword(){
    $userPass = $this->request->data('password');

    
    if ($userPass == 'Test123') {
      $this->request->session()->write('logged', true);
      $this->redirect('/');
    } else {
      $this->redirect('/settings/userlogin?error=true');
    }

  }
  
  public function userlogin() {
     
  }
  
  public function userlogoff() {
    $this->request->session()->write('logged', false);
    $this->redirect('/');
  }

}
