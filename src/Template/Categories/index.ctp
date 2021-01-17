<!-- File: src/Template/Defaultpages/index.ctp  (delete links added) -->
<div class="admin-listing-container">
  <h1>Kategorie</h1>
  <p><?= $this->Html->link("Dodaj kategorię", ['action' => 'add']) ?></p>
  <table>
    <tr>
      <th>Tytuł</th>
      <th>Stworzono</th>
      <th>Akcje</th>
    </tr>

    <!-- Here's where we iterate through our $categorys query object, printing out category info -->

    <?php foreach ($categorys as $category): ?>
      <tr>
        <td>
          <?= $this->Html->link($category->title, ['action' => 'view', $category->slug]) ?>
        </td>
        <td>
          <?= $category->created ?>
        </td>
        <td>
          <?= $this->Html->link('Edit', ['action' => 'edit', $category->slug]) ?>
          <?= $this->Html->link('View', ['action' => 'view', $category->slug]) ?>
          <?=
          $this->Form->postLink(
                  'Delete', ['action' => 'delete', $category->slug], ['confirm' => 'Jesteś pewien?'])
          ?>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</div>