<?php

use Cake\Core\Configure;
?>
<div class="admin-listing-container">
  <h1>Edytuj stronę</h1>
  <?php
  $options = Configure::read('sites_layouts');
  echo $this->Form->create($defaultpage);
  echo $this->Form->control('user_id', ['type' => 'hidden']);
  echo $this->Form->control('title');
  echo $this->Form->control('type', ['options' => $options, 'label' => 'Szablon']);
  echo $this->Form->control('subheader');
  echo $this->Form->control('body', ['rows' => '3']);
  echo $this->Form->button(__('Zapisz stronę'));
  echo $this->Form->end();
  ?>
</div>