<div class="admin-listing-container">
  <h1>Dodaj stronę</h1>
  <?php
  echo $this->Form->create($defaultpage);
  // Hard code the user for now.
  echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
  echo $this->Form->control('title');
  echo $this->Form->control('subheader');
  echo $this->Form->control('body', ['rows' => '3']);
  echo $this->Form->button(__('Zapisz stronę'));
  echo $this->Form->end();
  ?>
</div>