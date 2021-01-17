<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        if (empty($this->request->session()->read('logged'))) {
          $this->request->session()->write('logged', false);
        }
        
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        // pobieranie menu
        $this->loadModel('Menus');
        $menusTop = $this->Menus->find()->where(['position' => '1'])->toArray();
        $menusBottomCol1 = $this->Menus->find()->where(['position' => '2'])->toArray();
        $menusBottomCol2 = $this->Menus->find()->where(['position' => '3'])->toArray();
        $menusBottomCol3 = $this->Menus->find()->where(['position' => '4'])->toArray();
        $this->set('menusTop', $menusTop);
        
        $this->loadModel('Settings');
        $mainSettings = $this->Settings->find()->first();
        $this->set('mainSettings', $mainSettings);
        
        $this->set('menusBottomCol1', $menusBottomCol1);
        $this->set('menusBottomCol2', $menusBottomCol2);
        $this->set('menusBottomCol3', $menusBottomCol3);
        
        // pobieranie ustawien systemowych
        $this->loadModel('Settings');
        $systemSettings = $this->Settings->find()->first();
        
        $this->set('systemSettings', $systemSettings);
        
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }
}
