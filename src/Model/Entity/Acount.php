<?php
// src/Model/Entity/Acount.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Acount extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

}