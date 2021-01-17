<!-- File: src/Template/Defaultpages/index.ctp  (delete links added) -->
<div class="admin-listing-container">
  <h1>Lista opcji menu</h1>
  <p><?= $this->Html->link("Dodaj pozycję menu", ['action' => 'add']) ?></p>
  <table>
    <tr>
      <th>Tytuł</th>
      <th>Link</th>
      <th>Pozycja</th>
      <th>Stworzono</th>
      <th>Actions</th>
    </tr>

    <!-- Here's where we iterate through our $menus query object, printing out menu info -->

    <?php foreach ($menus as $menu): ?>
      <tr>
        <td>
          <?= $menu->title ?>
        </td>
        <td>
          <?= $menu->link ?>
        </td>
        <td>
          <?= $menu->position ?>
        </td>
        <td>
          <?= $menu->created ?>
        </td>
        <td>
          <?= $this->Html->link('Edit', ['action' => 'edit', $menu->id]) ?>
          <?=
          $this->Form->postLink(
                  'Delete', ['action' => 'delete', $menu->id], ['confirm' => 'Jesteś pewien?'])
          ?>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</div>