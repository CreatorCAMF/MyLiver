<!-- File: src/Template/Acounts/add.ctp -->

<h3 class="text-center text-capitalize font-weight-bold border-bottom text-primary mt-3">Editar Sitio</h3>

<?php
    echo $this->Form->create($site, array("class" =>"form-group"));
    // Hard code the user for now.
    echo $this->Form->control('site',array("class"=>"form-control"));
    echo $this->Form->control('url',array("class"=>"form-control"));
    echo $this->Form->button(__('Guardar Sitio'),array("class"=>"btn btn-primary"));
    echo $this->Form->end();
?>