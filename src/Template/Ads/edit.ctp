<div class="admin-listing-container">
  <h1>Edytuj Reklamę</h1>
  <?php
  echo $this->Form->create($ad);
  echo $this->Form->control('title');
  echo $this->Form->control('img_link');
  echo $this->Form->control('nofollow');
  echo $this->Form->control('link');
  echo $this->Form->button(__('Zapisz reklamę'));
  echo $this->Form->end();
  ?>
</div>