<div class="container clearfix">
  <div class="page-main-container">

    <div class="breadcrumbs">
      <h2>Strona główna</h2>
      <h2><a href="/mojcake">Kategorie</a></h2>
      <h2><?= h($category->title) ?></h2>
    </div>

    <h1 class="page-title">
      <?= h($category->title) ?>
    </h1>

    <div class="page-content">
      <?= h($category->body) ?>
    </div>

    <div class="page-pagesList-title">
      <span>Produkty</span>
    </div>

    <?php if (!empty($productList)) : ?>

      <div class="page-pagesList container">
        <div class="row">
          <?php foreach ($productList as $one) : ?>

            <div class="page-pagesList-page col-md-3">
              <div class="page-pagesList-page-title">
                <a href="/mojcake/products/view/<?= $one->slug ?>">
                  <?= $one->title ?>
                </a>
                <br/>
                <?= !empty($one->short_desc) ? $one->short_desc : '' ?>
              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="page-pagesList-title">
      <span>Pozostałe kategorie</span>
    </div>

    <?php if (!empty($categoriesList)) : ?>
      <div class="page-pagesList container">
        <div class="row">
          <?php foreach ($categoriesList as $one) : ?>
            <?php if ($one->id != 1) : ?>
              <div class="page-pagesList-page col-md-3">
                <div class="page-pagesList-page-title">
                  <a href="/mojcake/categorys/view/<?= $one->slug ?>">
                    <?= $one->title ?>
                  </a>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
    
  </div>
</div>
<?php
//$this->Html->link('Edit', ['action' => 'edit', $category->slug]) ?>