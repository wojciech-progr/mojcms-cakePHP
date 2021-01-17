<div class="admin-listing-container">
  <h1>Dodaj Kategorię</h1>
  <?php
  echo $this->Form->create($category);
  // Hard code the user for now.
  echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
  echo $this->Form->control('title');
  echo $this->Form->control('priority');
  echo $this->Form->control('main_img_link');
  echo $this->Form->control('body', ['rows' => '3']);
  echo $this->Form->button(__('Zapisz kategorię'));
  echo $this->Form->end();
  ?>
</div>