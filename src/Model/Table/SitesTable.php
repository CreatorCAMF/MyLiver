<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Query;

class SitesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->setDisplayField('site');
        $this->hasMany('Acounts');
    }

    public function findSites(Query $query)
    {
        $query ->find('all');
        $query ->where(['id !='=>'1']);//1 es el dato del site dummy
        return $query;
    }
}