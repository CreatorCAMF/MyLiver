<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;



class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->setDisplayField('user');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('user')
            ->notEmpty('password');
        return $validator;
    }
}
