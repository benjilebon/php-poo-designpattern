<?php

use App\Models\Admin;

$db->createTable('admin', 
    [
    'name'              => 'string', 
    'firstname'         => 'string', 
    'birthDate'         => 'datetime', 
    'address'           => 'string', 
    'maritalStatus'     => 'string', 
    'salary'            => 'float', 
    'yearsInCompany'    => 'int',
    'fonction'          => 'string'
]);

$test = new Admin([
    'name'          => 'Doe',
    'firstname'     => 'John',
    'birthDate'     => new DateTime('2000-00-00'),
    'address'       => '18 rue du test',
    'maritalStatus' => 'Célibataire',
    'salary'        => 2800.00,
    'yearsInCompany'=> 0,
    'fonction'      => 'Secrétaire'
]);
$test->create();


?>