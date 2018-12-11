<!-- File: src/Template/Acounts/index.ctp -->

<h1>DB</h1>
<?= $this->Html->link('Add DB', ['action' => 'add']) ?>
<table>
    <tr>
        <th>DB</th>
        <th>TNS</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($dbs as $db): ?>
    <tr>
        <td>
            <?= $db->db_name ?>
        </td>
        <td>
            <?= $db->tns?>
        </td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $db->id]) ?>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $db->id],
                ['confirm' => 'Are you sure?'])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>