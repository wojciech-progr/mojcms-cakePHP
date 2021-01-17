<!-- File: src/Template/Articles/index.ctp  (delete links added) -->
<div class="admin-listing-container">
  <h1>Reklamy</h1>
  <p><?= $this->Html->link("Dodaj Reklame", ['action' => 'add']) ?></p>
  <table>
    <tr>
      <th>Tytuł</th>
      <th>Grafika</th>
      <th>Akcje</th>
    </tr>

    <!-- Here's where we iterate through our $ads query object, printing out ad info -->

    <?php foreach ($ads as $ad): ?>
      <tr>
        <td>
          <?= $ad->title ?>
        </td>
        <td>
          <?= $ad->img_link; ?>
        </td>
        <td>
          <?= $this->Html->link('Edit', ['action' => 'edit', $ad->id]) ?>
          <?=
          $this->Form->postLink(
                  'Delete', ['action' => 'delete', $ad->id], ['confirm' => 'Jesteś pewien?'])
          ?>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>
</div>

<div>
  <a href="https://google.com">
    <button>SIEMANO</button>
  </a>
</div>