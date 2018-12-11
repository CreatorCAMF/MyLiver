<!-- File: src/Template/Acounts/add.ctp -->

<h3 class="text-center text-capitalize font-weight-bold border-bottom text-primary mt-3">Add Site</h3>

<?php
    echo $this->Form->create($site, array("class" =>"form-group"));
    // Hard code the user for now.
    echo $this->Form->control('db_name',array("class"=>"form-control"));
    echo $this->Form->control('tns',array("class"=>"form-control"));
    echo $this->Form->button(__('Save Acount'),array("class"=>"btn btn-primary"));
    echo $this->Form->end();
?>