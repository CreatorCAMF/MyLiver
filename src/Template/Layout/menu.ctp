<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$Description = 'My Liver';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $Description ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!--<?= $this->Html->css('liverBase.css') ?>-->
    <?= $this->Html->css('liverStyle.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery-3.3.1.slim.min.js') ?>
    <?= $this->Html->script('popper.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-liverpool">
        <?= $this->Html->image('liver_logo_blanco.png', ['alt' => 'CakePHP', 'class'=> 'img-fluid navbar-brand'])?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item <?= $bar_status[0]?>">
                <?= $this->Html->link('Cuentas DB','/menu/cuentasdb',['class' => 'nav-link']); ?>
            </li>
            <li class="nav-item <?= $bar_status[1]?>">
                <?= $this->Html->link('Cuentas Sites','/menu/cuentassites',['class' => 'nav-link']); ?>
            </li>
            <li class="nav-item <?= $bar_status[2]?>">
                <?= $this->Html->link('Añadir DB','/menu/adddb',['class' => 'nav-link']); ?>
            </li>
            <li class="nav-item <?= $bar_status[3]?>">
                <?= $this->Html->link('Añadir Site','/menu/addsite',['class' => 'nav-link']); ?>
            </li>
            <li class="nav-item <?= $bar_status[4]?>">
                <?= $this->Html->link('Añadir Cuenta','/menu/addacount',['class' => 'nav-link']); ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('Salir','/menu/logout',['class' => 'nav-link']); ?>
            </li>
            </ul>
        </div>
    </nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
    
        
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>

