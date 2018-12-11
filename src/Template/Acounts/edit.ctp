<!-- File: src/Template/Acounts/add.ctp -->

<h1>Add Acount</h1>
<?php
    echo $this->Form->create($acount);
    // Hard code the user for now.
    echo $this->Form->hidden('user_id',['value' => $user_id]);
    echo $this->Form->control('db_id', ['options' => $dbs]);
    echo $this->Form->control('site_id', ['options' => $sites]);
    echo $this->Form->control('name');
    echo $this->Form->control('password');
    echo $this->Form->button(__('Save Acount'));
    echo $this->Form->end();
?>