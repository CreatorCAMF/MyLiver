

<h3 class="text-center text-capitalize font-weight-bold border-bottom text-primary mt-3">Agregar Usuario</h3>

<?php
    echo $this->Form->create($user, array("class" =>"form-group"));
    // Hard code the user for now.
    echo $this->Form->control('user',array("class"=>"form-control"));
    echo $this->Form->control('password',array("class"=>"form-control"));
    echo $this->Form->control('role',array("class"=>"form-control"));
    echo $this->Form->button(__('Guardar Usuario'),array("class"=>"btn btn-primary"));
    echo $this->Form->end();
?>