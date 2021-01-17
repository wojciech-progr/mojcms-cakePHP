<!-- File: src/Template/Articles/add.ctp -->
<div class="admin-listing-container">
  <h1>Dodaj artykuł</h1>
  <?php
  echo $this->Form->create($article);
  echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
  echo $this->Form->control('title');
  echo $this->Form->control('body', ['rows' => '3']);
  echo $this->Form->control('main_img_link');
  echo $this->Form->control('list_img_link');
  echo $this->Form->button(__('Zapisz artykuł'));
  echo $this->Form->end();
  ?>
</div>