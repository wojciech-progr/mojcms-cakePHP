<?= $this->element('head'); ?>
<?= $this->element('navigation'); ?>



<div class="container clearfix">
  <div class="page-main-container">
    
    <div class="breadcrumbs">
      <h2>Strona główna</h2>
      <h2>Lista artykułów</h2>
    </div>
    
    <h1 class="page-title">
      Lista artykułów
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
    
    <div class="articles-list-container container">
      <div class="row">
        <?php foreach ($articles as $one) : ?>
          <div class="col-md-4">
            <a href="/mojcake/articles/view/<?= $one->slug ?>">
              <div class="single-article">
                <div class="image" style="background-image: url('<?= $one->list_img_link ?>')"></div>
                <div class="title">
                  <b><?= $one->title ?></b>
                </div>
                <div class="shortdesc">
                  Przykładowy Krótki opis Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<?= $this->element('footer', ['mainSettings' => $mainSettings]); ?>