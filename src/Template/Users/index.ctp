<!-- File: src/Template/Users/index.ctp -->

<h1>Users</h1>
<?= $this->Html->link('Add User', ['action' => 'add']) ?>
<table>
    <tr>
        <th>User</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?= $this->Html->link($user->user, ['action' => 'view', $user->password]) ?>
        </td>
        <td>
            <?= $user->password ?>
        </td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $user->id],
                ['confirm' => 'Are you sure?'])
            ?>
        </td>       
    </tr>
    <?php endforeach; ?>
</table>


