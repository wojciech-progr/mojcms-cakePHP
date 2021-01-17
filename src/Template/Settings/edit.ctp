<div class="admin-listing-container">
  <h1>Dodaj ustawienie</h1>
  <?php
  echo $this->Form->create($setting);
  ?>
  <div class="settings-type">Ustawienia główne</div>
  <?php
  echo $this->Form->control('name', ['label' => 'Nazwa']);
  ?>
  <?php
  echo $this->Form->control('adress', ['label' => 'Adres']);
  ?>
  <?php
  echo $this->Form->control('tel', ['label' => 'Telefon']);
  ?>
  <?php
  echo $this->Form->control('mail', ['label' => 'Email']);
  ?>
  <div class="settings-type">Zgoda kontaktowa</div>
  <?php $this->Form->control('form_agreement', ['label' => 'Treść zgody']); ?>
  <?= $this->Form->control('contact_background', ['label' => 'Link do grafiki za kontaktem']); ?>
  <div class="settings-type">Główny slider</div>
  <?= $this->Form->control('slide_title_1', ['label' => 'Tytuł slideu']); ?>
  <?= $this->Form->control('slide_desc_1', ['label' => 'Dopisek']); ?>
  <?= $this->Form->control('slide_link_1', ['label' => 'Link']); ?>
  <?= $this->Form->control('slide_img_link_1', ['label' => 'Link do grafiki']); ?>
  
  <?= $this->Form->control('slide_title_2', ['label' => 'Tytuł slideu']); ?>
  <?= $this->Form->control('slide_desc_2', ['label' => 'Dopisek']); ?>
  <?= $this->Form->control('slide_link_2', ['label' => 'Link']); ?>
  <?= $this->Form->control('slide_img_link_2', ['label' => 'Link do grafiki']); ?>
  
  <?= $this->Form->control('slide_title_3', ['label' => 'Tytuł slideu']); ?>
  <?= $this->Form->control('slide_desc_3', ['label' => 'Dopisek']); ?>
  <?= $this->Form->control('slide_link_3', ['label' => 'Link']); ?>
  <?= $this->Form->control('slide_img_link_3', ['label' => 'Link do grafiki']); ?>
  
  <?= $this->Form->control('slide_title_4', ['label' => 'Tytuł slideu']); ?>
  <?= $this->Form->control('slide_desc_4', ['label' => 'Dopisek']); ?>
  <?= $this->Form->control('slide_link_4', ['label' => 'Link']); ?>
  <?= $this->Form->control('slide_img_link_4', ['label' => 'Link do grafiki']); ?>
  <div class="settings-type">Stopka</div>
  <?= $this->Form->control('footer_img_1', ['label' => 'Kolumna 1 - link do grafiki']); ?>
  <?= $this->Form->control('footer_img_2', ['label' => 'Kolumna 2 - link do grafiki']); ?>
  <?= $this->Form->control('footer_img_3', ['label' => 'Kolumna 3 - link do grafiki']); ?>
  <div class="settings-type">Ustawienia SEO</div>
  <?php
  echo $this->Form->control('title', ['label' => 'Tytuł']);
  echo $this->Form->control('description', ['label' => 'Opis']);
  echo $this->Form->control('keywords', ['label' => 'Słowa kluczowe']);
  echo $this->Form->button(__('Zapisz ustawienia'));
  echo $this->Form->end();
  ?>
</div>