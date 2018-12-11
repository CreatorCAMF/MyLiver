<!-- File: src/Template/Articles/edit.ctp -->

<h1>Edit DB</h1>
<?php
    echo $this->Form->create($db);
    // Hard code the user for now.
    echo $this->Form->control('db_name');
    echo $this->Form->control('tns', ['rows' => '10']);
    echo $this->Form->button(__('Save Acount'));
    echo $this->Form->end();
?>