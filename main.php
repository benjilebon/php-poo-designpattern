<?php

use App\Models\Collaborateur;
use Arch\model\Model;


$db->createTable('collaborateurs',[
    'name' => 'string',
    'firstname' => 'string'
]);

$collaborateur1 = new Collaborateur('test', 'lol', '2000-00-00');
$collaborateur1->create();



// $t = Model::getById('collaborateurs', 2);

?>