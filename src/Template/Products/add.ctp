<!-- File: src/Template/Articles/add.ctp -->
<div class="admin-listing-container">
  <h1>Dodaj Produkt</h1>
  <?php
    echo $this->Form->create($product);
    // Hard code the user for now.
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->control('category_id', ['options' => $options, 'label' => 'Kategoria']);
    echo $this->Form->control('main_img_link');
    echo $this->Form->control('short_desc');
    echo $this->Form->control('serial');
    echo $this->Form->button(__('Zapisz produkt'));
    echo $this->Form->end();
  ?>
</div>