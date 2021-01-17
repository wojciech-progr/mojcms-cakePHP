<?php

// src/Model/Table/DefaultpagesTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Text;

class MenusTable extends Table {

  public function initialize(array $config) {
    $this->addBehavior('Timestamp');
  }
  
}
