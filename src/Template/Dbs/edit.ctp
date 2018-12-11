<!-- File: src/Template/Articles/edit.ctp -->

<h3 class="text-center text-capitalize font-weight-bold border-bottom text-primary mt-3">Editar DB</h3>

<?php
    echo $this->Form->create($db, array("class" =>"form-group"));
    // Hard code the user for now.
    echo $this->Form->control('db_name',array("class"=>"form-control"));
    echo $this->Form->control('tns',array("class"=>"form-control"));
    echo $this->Form->button(__('Guardar DB'),array("class"=>"btn btn-primary"));
    echo $this->Form->end();
?>