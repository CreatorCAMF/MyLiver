<!-- File: src/Template/Acounts/index.ctp -->

<h3 class="text-center text-capitalize font-weight-bold border-bottom text-primary mt-3">DBs</h3>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">DB</th>
      <th scope="col">TNS</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->
    <?php foreach ($dbs as $db): ?>
    <tr>
      <th><?= $db->id ?></th>
      <td><?= $db->db_name ?></td>
      <td><?= $db->tns?></td>
      <td> <?= $this->Html->link('Editar', ['action' => 'edit', $db->id]) ?>
            <?= $this->Form->postLink(
                'Borrar',
                ['action' => 'delete', $db->id],
                ['confirm' => 'Are you sure?'])
            ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>