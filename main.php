<?php

use App\Models\Collaborateur;
use Arch\Model;


$db->createTable('collaborateurs',[
    'name' => 'string',
    'firstname' => 'string'
]);

$collab1 = new Collaborateur([
    'name' => 'loll',
    'firstname' => 'mabite'
]);
$collab1->create();


var_dump($collab1);


?>