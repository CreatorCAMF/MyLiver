<?php
// src/Model/Table/AcountsTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Query;

class AcountsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users');
        $this->belongsTo('Dbs');
        $this->belongsTo('Sites');
    }

    public function findAcountsDBs(Query $query, array $options)
    {

        $query ->find('all', 
                    array('fields'=>
                    array(  'id',
                            'user_id',
                            'db_id',
                            'name',
                            'password',
                            'Dbs.db_name',
                            'Dbs.tns')));
        $query ->contain(['Users']);
        $query ->contain(['Dbs']);
        $query ->where(['user_id' => $options['user_id'], 
                        'db_id !='=> '14']);//14 es el dato de la db dummy
        return $query;
    }

    public function findAcountsSites(Query $query, array $options)
    {
        $query ->find('all', 
                    array('fields'=>
                    array(  'id',
                            'user_id',
                            'site_id',
                            'name',
                            'password',
                            'Sites.site',
                            'Sites.url')));
        $query ->contain(['Users']);
        $query ->contain(['Sites']);
        $query ->where(['user_id' => $options['user_id'],
                        'site_id !='=>'1']);//1 es el dato del site dummy
        return $query;
    }
    
}
