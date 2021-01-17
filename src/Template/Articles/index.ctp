<!-- File: src/Template/Articles/index.ctp  (delete links added) -->
<div class="admin-listing-container">
  <h1>Artykuły</h1>
  <p><?= $this->Html->link("Dodaj artykuł", ['action' => 'add']) ?></p>

  <table>
    <tr>
      <th>Tytuł</th>
      <th>Stworzono</th>
      <th>Akcje</th>
    </tr>

    <!-- Here's where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($articles as $article): ?>
      <tr>
        <td>
          <?= $this->Html->link($article->title, ['action' => 'view', $article->slug], ['target' => '_blank']) ?>
        </td>
        <td>
          <?= $article->created ?>
        </td>
        <td>
          <?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?>
          <?= $this->Html->link('View', ['action' => 'view', $article->slug], ['target' => '_blank']) ?>
          <?=
          $this->Form->postLink(
                  'Delete', ['action' => 'delete', $article->slug], ['confirm' => 'Jesteś pewien??'])
          ?>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</div>