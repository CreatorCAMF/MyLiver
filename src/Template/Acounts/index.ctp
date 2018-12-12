<!-- File: src/Template/Acounts/index.ctp -->

<h1>Users</h1>
<?= $this->Html->link('Add Acount', ['action' => 'add']) ?>
<? debug($query)?>
<table>
    <tr>
        <th>User</th>
        <th>Acount</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($acounts as $acount): ?>
    <tr>
        <td>
            <?= $this->Html->link($acount->acount, ['action' => 'view', $acount->password]) ?>
        </td>
        <td>
            <?= $acount->name?>
        </td>
        <td>
            <?= $acount->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>