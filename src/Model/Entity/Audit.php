<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Audit extends Entity
{
    protected $_acessible = [
        '*' => true,
    ];
}