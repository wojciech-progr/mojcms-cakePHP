<div class="admin-listing-container">
  <h1>Dodaj Email</h1>
  <?php
  echo $this->Form->create($newsletter);
  echo $this->Form->control('name');
  echo $this->Form->control('email');
  echo $this->Form->button(__('Zapisz email'));
  echo $this->Form->end();
  ?>
</div>