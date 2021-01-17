
<div class="container clearfix">
  <div class="page-main-container">

    <div class="breadcrumbs">
      <h2>Strona główna</h2>
      <h2><a href="/mojcake">Inne</a></h2>
      <h2><?= h($defaultpage->title) ?></h2>
    </div>

    <h1 class="page-title">
      <?= h($defaultpage->title) ?>
    </h1>

    <div class="page-subheader">
      <?= h($defaultpage->subheader) ?>
    </div>

    <div class="page-content">
      <?= h($defaultpage->body) ?>
    </div>

  </div>
</div>

<?php
