<!-- File: src/Template/Defaultpages/index.ctp  (delete links added) -->
<div class="admin-listing-container">
  <h1>Strony</h1>
  <p><?= $this->Html->link("Dodaj stronę", ['action' => 'add']) ?></p>
  <table>
    <tr>
      <th>Tytuł</th>
      <th>Stworzono</th>
      <th>Akcje</th>
    </tr>

    <!-- Here's where we iterate through our $defaultpages query object, printing out defaultpage info -->

    <?php foreach ($defaultpages as $defaultpage): ?>
      <tr>
        <td>
          <?= $this->Html->link($defaultpage->title, ['action' => 'view', $defaultpage->slug]) ?>
        </td>
        <td>
          <?= $defaultpage->created ?>
        </td>
        <td>
          <?= $this->Html->link('Edit', ['action' => 'edit', $defaultpage->slug]) ?>
          <?= $this->Html->link('View', ['action' => 'view', $defaultpage->slug]) ?>
          <?php if ($defaultpage->type != 1) : ?>
            <?=
            $this->Form->postLink(
                    'Delete', ['action' => 'delete', $defaultpage->slug], ['confirm' => 'Jesteś pewien?'])
            ?>
          <?php endif; ?>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</div>