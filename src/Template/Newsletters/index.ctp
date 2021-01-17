<!-- File: src/Template/Articles/index.ctp  (delete links added) -->
<div class="admin-listing-container">
  <h1>Newsletter</h1>
  <p><?= $this->Html->link("Dodaj Newsletter", ['action' => 'add']) ?></p>
  <table>
    <tr>
      <th>Nazwa</th>
      <th>Email</th>
      <th>Akcje</th>
    </tr>

    <!-- Here's where we iterate through our $emails query object, printing out ad info -->

    <?php foreach ($newsletters as $newsletter): ?>
      <tr>
        <td>
          <?= $newsletter->name ?>
        </td>
        <td>
          <?= $newsletter->email ?>
        </td>
        <td>
          <?= $this->Html->link('Edit', ['action' => 'edit', $newsletter->id]) ?>
          <?=
          $this->Form->postLink(
                  'Delete', ['action' => 'delete', $newsletter->id], ['confirm' => 'Jesteś pewien?'])
          ?>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</div>