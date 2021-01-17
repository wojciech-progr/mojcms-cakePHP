<div class="admin-listing-container">
  <h1>Edytuj menu</h1>
  <?php
  echo $this->Form->create($menu);
  echo $this->Form->control('title');
  echo $this->Form->control('link');
  echo $this->Form->control('position', ['options' => $options, 'label' => 'Pozycja']);
  echo $this->Form->button(__('Zapisz menu'));
  echo $this->Form->end();
  ?>
</div>