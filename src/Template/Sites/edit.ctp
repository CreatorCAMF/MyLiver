<!-- File: src/Template/Acounts/add.ctp -->

<h1>Edit Site</h1>
<?php
    echo $this->Form->create($site);
    // Hard code the user for now.
    echo $this->Form->control('site');
    echo $this->Form->control('url');
    echo $this->Form->button(__('Save Site'));
    echo $this->Form->end();
?>