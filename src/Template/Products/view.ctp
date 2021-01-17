<div class="container clearfix">
  <div class="page-main-container">
    
    <div class="breadcrumbs">
      <h2>Strona główna</h2>
      <h2><a href="/mojcake">Produkty</a></h2>
      <h2><?= h($product->title) ?></h2>
    </div>
    
    <h1><?= h($product->title) ?></h1> 
    <div><b>Numer seryjny:</b> <?= h($product->serial) ?></div>
    
    
    <div class="product-main-img" style="background-image: url('<?= $product->main_img_link ?>')">
      
    </div>
    <div class="product-body">
      <p><?= h($product->body) ?></p>
    </div>
    
    Jesteś zainteresowany tym produktem? <b><a href="http://localhost/mojcake/defaultpages/view/Kontakt">Skontaktuj się z nami</a></b>! Pamiętaj, aby podać numer seryjny.
  </div>
</div>