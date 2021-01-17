<!-- File: src/Template/Defaultpages/index.ctp  (delete links added) -->
<div class="admin-listing-container">
  <h1>Opcje systemu</h1>
  <?php foreach ($settings as $setting) : ?>
    <?= $this->Html->link('Edytuj opcje systemowe', ['action' => 'edit']) ?>
  <?php endforeach; ?>
</div>