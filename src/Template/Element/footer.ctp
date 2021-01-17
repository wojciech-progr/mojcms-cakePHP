<footer>
  <aside>
    <div class="newsletter-background" style="background-image: url(<?= $mainSettings['contact_background'] ?>)">
      <div class="newsletter-container">
        <div class="title">
          Skontaktuj się z nami i zapisz się na nasz newsletter!
        </div>
        <form method="post" action="/mojcake/newsletters/add" id="newsletter">
          <div class="newsletter-option">
            <label for="name">Imię</label>
            <input id="name" type="text" name="name" required>
          </div>
          <div class="newsletter-option">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>
          </div>
          <div class="newsletter-agreement">
            <input type="checkbox" id="agreement" required>
            <label for="agreement" class="agreement">
              <?= $mainSettings['form_agreement'] ?>
            </label>
          </div>
          <div class="newsletter-option">
            <button type="submit" form="newsletter" value="Submit" class="save">Zapisz się</button>
          </div>
        </form>
      </div>
    </div>
  </aside>
  <nav class="top-bar expanded" data-topbar role="navigation">
    <div class="container">
      <div class="row">
        <?php if (!empty($menusBottomCol1)) : ?>
          <div class="col-md-4">
            <div class="bottom-menu-image" style="background-image: url(<?= $mainSettings['footer_img_1'] ?>)">

            </div>
            <?php foreach ($menusBottomCol1 as $menu) : ?>
              <div class="nav-option">
                <a href="<?= $menu->link ?>">
                  <?= $menu->title ?>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($menusBottomCol2)) : ?>
          <div class="col-md-4">
            <div class="bottom-menu-image" style="background-image: url(<?= $mainSettings['footer_img_2'] ?>)">

            </div>
            <?php foreach ($menusBottomCol2 as $menu) : ?>
              <div class="nav-option">
                <a href="<?= $menu->link ?>">
                  <?= $menu->title ?>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($menusBottomCol3)) : ?>
          <div class="col-md-4">
            <div class="bottom-menu-image" style="background-image: url(<?= $mainSettings['footer_img_3'] ?>)">

            </div>
            <?php foreach ($menusBottomCol3 as $menu) : ?>
              <div class="nav-option">
                <a href="<?= $menu->link ?>">
                  <?= $menu->title ?>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </nav>
</footer>
<script>
  // obsługa menu admina
  $(document).ready(function () {
    // otwieranie głównych opcji
    $(".admin-menu-container").hover(function () {
      $(".admin-menu").toggleClass('display-admin-menu');
    });

    // otwieranie subopcji
    $(".admin-menu-option").click(function () {
      $(".admin-menu-option").children().removeClass('display-admin-menu');
      $(this).children().toggleClass('display-admin-menu');
    });
  });

  // glowny slider
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      loop: true,
      autoplay: false,
      responsiveClass: true,
      responsive : {
        0 : {
          items:1 
        },
        768 : {
          items:3 
        }
    }
    });
  });
</script>
</body>
</html>