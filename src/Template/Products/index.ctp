<!-- File: src/Template/Articles/index.ctp  (delete links added) -->
<div class="admin-listing-container">
  <h1>Produkty</h1>
  <p><?= $this->Html->link("Dodaj produkt", ['action' => 'add']) ?></p>
  <table>
    <tr>
      <th>Tytuł</th>
      <th>Stworzono</th>
      <th>Akcje</th>
    </tr>

    <!-- Here's where we iterate through our $products query object, printing out product info -->

    <?php foreach ($products as $product): ?>
      <tr>
        <td>
          <?= $this->Html->link($product->title, ['action' => 'view', $product->slug]) ?>
        </td>
        <td>
          <?= $product->created ?>
        </td>
        <td>
          <?= $this->Html->link('Edit', ['action' => 'edit', $product->slug]) ?>
          <?= $this->Html->link('View', ['action' => 'view', $product->slug]) ?>
          <?=
          $this->Form->postLink(
                  'Delete', ['action' => 'delete', $product->slug], ['confirm' => 'Jesteś pewien?'])
          ?>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</div>