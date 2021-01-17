<?= $this->element('head'); ?>
<?= $this->element('navigation', ['mainSettings' => $mainSettings]); ?>
<div class="container clearfix">
  <div class="page-main-container">
    <h1 class="page-title">
      <?= $systemSettings->name ?>
    </h1>
    <div class="page-subheader">
      <?= h($defaultpage->subheader) ?>
    </div>
  </div>
</div>
<?php if (!empty($firstAdd)) : ?>
  <?= $this->element('one_ad', array('adImageLink' => $firstAdd->img_link, 'adLink' => $firstAdd->link, 'adTitle' => $firstAdd->title, 'adFollow' => $firstAdd->nofollow)); ?>
<?php endif; ?>
<div class="owl-carousel main-owl">
  <?php for ($i = 1; $i < 5; $i++) : ?>
    <?php if (!empty($mainSettings['slide_title_1'])) : ?>
      <a href="<?= $mainSettings['slide_link_' . $i] ?>">
        <div class="one-slide">
          <div class="one-slide-img" style="background-image: url(<?= $mainSettings['slide_img_link_' . $i] ?>);">
            <div class="news-icons-container">

            </div>
          </div>
          <div class="main-slider-desc">
            <?= $mainSettings['slide_desc_' . $i] ?>
          </div>
        </div>
      </a>
    <?php endif; ?>
  <?php endfor; ?>
</div>
<div class="container clearfix">
  <div class="page-main-container">
    <?php if (!empty($defaultpage->body)) : ?>
      <div class="page-content">
        <?= h($defaultpage->body) ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($categoriesList)) : ?>
      <div class="page-pagesList-title">
        <h2>Kategorie</h2>
      </div>

      <div class="page-pagesList container">
        <div class="row categories-row">
          <?php foreach ($categoriesList as $one) : ?>

            <div class="page-pagesList-page col-md-3">
              <div class="page-pagesList-page-title mb-30">
                <a href="/mojcake/categories/view/<?= $one->slug ?>">
                  <div class="categories-list-image" style="background-image: url(<?= $one->main_img_link ?>)">

                  </div>
                  <?= $one->title ?>
                </a>
              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
    <div class="page-pagesList-title">
      <h2>Inne</h2>
    </div>
    <?php if (!empty($pagesList)) : ?>
      <div class="page-pagesList container">
        <div class="row">
          <?php foreach ($pagesList as $one) : ?>
            <?php if ($one->id != 1) : ?>
              <div class="page-pagesList-page col-md-3">
                <div class="page-pagesList-page-title mb-30">
                  <a href="/mojcake/defaultpages/view/<?= $one->slug ?>">
                    <?= $one->title ?>
                  </a>
                  <br/>
                  <span class="page-shortdesc">
                    <?= $one->subheader ?>
                  </span>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php if (!empty($secondAdd)) : ?>
  <?= $this->element('one_ad', array('adImageLink' => $secondAdd->img_link, 'adLink' => $secondAdd->link, 'adTitle' => $secondAdd->title, 'adFollow' => $secondAdd->nofollow)); ?>
<?php endif; ?>
<?= $this->element('footer', ['mainSettings' => $mainSettings]); ?>