<!-- File: src/Template/Acounts/add.ctp -->

<h3 class="text-center text-capitalize font-weight-bold border-bottom text-primary mt-3">Add DB</h3>

<?php
    echo $this->Form->create($acount, array("class" =>"form-group"));
    // Hard code the user for now.
    echo $this->Form->hidden('user_id',['value' => $user_id]);
    echo $this->Form->control('db_id', array("class"=>"custom-select"), ['options' => $dbs]);
    echo $this->Form->control('site_id', array("class"=>"custom-select"), ['options' => $sites]);
    echo $this->Form->control('name',array("class"=>"form-control"));
    echo $this->Form->control('password',array("class"=>"form-control"));
    echo $this->Form->button(__('Save Acount'),array("class"=>"btn btn-primary"));
    echo $this->Form->end();
?>
