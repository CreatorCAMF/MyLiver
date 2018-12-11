<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class DbsTable extends Table 
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->setDisplayField('db_name');
        $this->hasMany('Acounts');
    }
}