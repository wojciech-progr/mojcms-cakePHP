<?php
if ($this->request->session()->read('logged') == true) {

?>
<div class="admin-menu-container">
  <div class="admin-menu-open">
    <i class="far fa-arrow-alt-circle-down"></i>
    Menu Admina
  </div>
  <div class="admin-menu">
    <div class="admin-menu-option">
      <i class="fas fa-chalkboard-teacher"></i> <span>Artykuły</span>
      <div class="admin-menu-suboption">
        <a href="/mojcake/articles/index">
          Lista
        </a>
      </div>
      <div class="admin-menu-suboption">
        <a href="/mojcake/articles/add">
          Dodaj
        </a>
      </div>
    </div>
    <div class="admin-menu-option">
      <i class="fas fa-bicycle"></i> <span>Produkty</span>
      <div class="admin-menu-suboption">
        <a href="/mojcake/products/index">
          Lista
        </a>
      </div>
      <div class="admin-menu-suboption">
        <a href="/mojcake/products/add">
          Dodaj
        </a>
      </div>
    </div>
    <div class="admin-menu-option">
      <i class="fas fa-border-all"></i> <span>Kategorie</span>
      <div class="admin-menu-suboption">
        <a href="/mojcake/categories/index">
          Lista
        </a>
      </div>
      <div class="admin-menu-suboption">
        <a href="/mojcake/categories/add">
          Dodaj
        </a>
      </div>
    </div>
    <div class="admin-menu-option">
      <i class="fas fa-book-open"></i> <span>Strony (Inne)</span>
      <div class="admin-menu-suboption">
        <a href="/mojcake/defaultpages/index">
          Lista
        </a>
      </div>
      <div class="admin-menu-suboption">
        <a href="/mojcake/defaultpages/add">
          Dodaj
        </a>
      </div>
    </div>
    <div class="admin-menu-option">
      <i class="fab fa-buromobelexperte"></i> <span>Menu</span>
      <div class="admin-menu-suboption">
        <a href="/mojcake/menus/index">
          Lista
        </a>
      </div>
      <div class="admin-menu-suboption">
        <a href="/mojcake/menus/add">
          Dodaj
        </a>
      </div>
    </div>
    <div class="admin-menu-option">
      <i class="fas fa-ad"></i> <span>Reklamy</span>
      <div class="admin-menu-suboption">
        <a href="/mojcake/ads/index">
          Lista
        </a>
      </div>
      <div class="admin-menu-suboption">
        <a href="/mojcake/ads/add">
          Dodaj
        </a>
      </div>
    </div>
    <div class="admin-menu-option">
      <i class="fab fa-buromobelexperte"></i> <span>Newsletter</span>
      <div class="admin-menu-suboption">
        <a href="/mojcake/newsletters/index">
          Lista
        </a>
      </div>
      <div class="admin-menu-suboption">
        <a href="/mojcake/newsletters/add">
          Dodaj
        </a>
      </div>
    </div>
    <div class="admin-menu-option">
      <a class="settings-option" href="/mojcake/settings/edit/1">
        <i class="fab fa-accusoft"></i> <span>Ustawienia</span>
      </A>
    </div>
  </div>
</div>
<?php 
}
?>