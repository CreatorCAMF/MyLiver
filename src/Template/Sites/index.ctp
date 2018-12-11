<!-- File: src/Template/Sites/index.ctp -->

<h1>Sites</h1>
<?= $this->Html->link('Add Site', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Site</th>
        <th>Url</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($sites as $site): ?>
    <tr>
        <td>
            <?= $site->site ?>
        </td>
        <td>
            <?= $site->url?>
        </td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $site->id]) ?>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $site->id],
                ['confirm' => 'Are you sure?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>