<?= $this->element('head'); ?>
<?= $this->element('navigation'); ?>



<div class="container clearfix">
  <div class="page-main-container">
    
    <div class="breadcrumbs">
      <h2>Strona główna</h2>
      <h2><?= $defaultpage->title ?></h2>
    </div>
    
    <h1 class="page-title">
      <?= $defaultpage->title ?>
    </h1>
    <div class="page-subheader">
      <?= h($defaultpage->subheader) ?>
    </div>
    
    <div class="page-main-container mlr-0">
      <?php if (!empty($defaultpage->body)) : ?>
        <div class="page-content">
          <?= h($defaultpage->body) ?>
        </div>
      <?php endif; ?>    
    </div>
    
  </div>
</div>

<?= $this->element('footer', ['mainSettings' => $mainSettings]); ?>