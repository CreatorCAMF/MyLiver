<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Query;

class DbsTable extends Table 
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->setDisplayField('db_name');
        $this->hasMany('Acounts');
    }

    public function findDbs(Query $query)
    {
        $query ->find('all');
        $query ->where(['id !='=>'14']);//14 es el dato de la DB dummy
        return $query;
    }
}