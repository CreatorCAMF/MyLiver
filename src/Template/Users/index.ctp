<!-- File: src/Template/Users/index.ctp -->


<h3 class="text-center text-capitalize font-weight-bold border-bottom text-primary mt-3">Usuarios</h3>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Rol</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($users as $user): ?>
    <tr>
      <th><?= $user->id ?></th>
      <td><?= $user->user ?></td>
      <td><?= $user->role?></td>
      <td> <?= $this->Html->link('Editar', ['action' => 'edit', $user->id]) ?>
            <?= $this->Form->postLink(
                'Borrar',
                ['action' => 'delete', $user->id],
                ['confirm' => '¿Estas seguro?'])
            ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>


