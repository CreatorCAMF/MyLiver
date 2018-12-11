<!-- File: src/Template/Sites/index.ctp -->


<h3 class="text-center text-capitalize font-weight-bold border-bottom text-primary mt-3">Sitios</h3>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sitio</th>
      <th scope="col">Url</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($sites as $site): ?>
    <tr>
      <th><?= $site->id ?></th>
      <td><?= $site->site ?></td>
      <td><?= $this->Html->link($site->url,$site->url,['class' => 'nav-link']);?></td>
      <td> <?= $this->Html->link('Editar', ['action' => 'edit', $site->id]) ?>
            <?= $this->Form->postLink(
                'Borrar',
                ['action' => 'delete', $site->id],
                ['confirm' => 'Are you sure?'])
            ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>