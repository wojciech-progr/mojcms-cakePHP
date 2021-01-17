<nav class="top-bar expanded" data-topbar role="navigation">
  <ul class="title-area large-3 medium-4 columns">
    <!-- TODO edycja tych danych -->
    <li>
      <img class="system-logo" src="<?= $this->Url->image('logo.png') ?>">
    </li>
    <li class="name">
      <h1><a href="/mojcake"><?= $systemSettings->name ?></a></h1>
    </li>
  </ul>
  <div class="top-bar-section">
    <ul class="left">
      <li class="menu-option top-contact">
        <a href="javascript:void(0)">
          <?= $mainSettings['adress'] ?>
        </a>
      </li>
      <li class="menu-option top-contact">
        <a href="tel:412412515">
          <?= $mainSettings['tel'] ?>
        </a>
      </li>
      <li class="menu-option top-contact">
        <a href="mailto:musicallo@example.com">
          <?= $mainSettings['mail'] ?>
        </a>
      </li>
    </ul>
    <ul class="right mright-15">
      <?php if ($this->Session->read('logged') == false) : ?>
        <li class="menu-option login-button">
          <a href="/mojcake/settings/userlogin">
            Zaloguj
          </a>
        </li>
      <?php endif; ?>
      <?php if ($this->Session->read('logged') == true) : ?>
        <li class="menu-option login-button">
          <a href="/mojcake/settings/userlogoff">
            Wyloguj
          </a>
        </li>
      <?php endif; ?>
      <?php foreach ($menusTop as $menu) : ?>
        <li class="menu-option">
          <a href="<?= $menu->link ?>">
            <?= $menu->title ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?= $this->element('adminmenu'); ?>
</nav>