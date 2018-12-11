<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class SitesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->setDisplayField('site');
        $this->hasMany('Acounts');
    }
}