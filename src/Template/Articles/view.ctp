<!-- File: src/Template/Articles/view.ctp -->
<div class="container clearfix">
  <div class="page-main-container">
    <div class="breadcrumbs">
      <h2>Strona główna</h2>
      <h2><a href="<?= $this->request->referer(); ?>">Lista artykułów</a></h2>
      <h2><?= h($article->title) ?></h2>
      
    </div>
    <h1><?= h($article->title) ?></h1>
    <div class="product-main-img" style="background-image: url('<?= $article->main_img_link ?>')">
      
      </div>
    <p><?= h($article->body) ?></p>
    <p><small>Created: <?= $article->created ?></small></p>
  </div>
</div>