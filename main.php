<?php

use App\Models\Collaborateur;
use Arch\Model;


$db->createTable('collaborateurs',[
    'name' => 'string',
    'firstname' => 'string'
]);

$collab1 = Collaborateur::getById(20);

$b = new Collaborateur([
    'name' => 'bite',
    'firstname' => 'tadaronne'
]);

$b->create();

echo '<pre>';
var_dump($collab1);
echo '</pre>';



// $t = Model::getById('collaborateurs', 2);

?>