
<div class="row justify-content-center align-items-center">
    <div class="col-4">
        <?= $this->Html->image('liverpool_logo.png', ['alt' => 'CakePHP', 'class'=> 'img-fluid rounded mx-auto d-block'])?>
        <?= $this->Form->create() ?>
        <?= $this->Form->control('user') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->button('Login') ?>
        <?= $this->Form->end() ?>
    </div>
</div>
