<!-- File: src/Template/Users/add.ctp -->

<h1>Add User</h1>
<?php
    echo $this->Form->create($user);
    // Hard code the user for now.
    echo $this->Form->control('user');
    echo $this->Form->control('password');
    echo $this->Form->button(__('Save User'));
    echo $this->Form->end();
?>