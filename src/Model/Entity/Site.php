<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Site extends Entity
{
    protected $_accesible = [
        '*' => true,
    ];
}