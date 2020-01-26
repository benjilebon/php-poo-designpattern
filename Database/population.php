<?php

use App\Models\Admin;
use App\Models\Departement;
use App\Models\Devis;
use App\Models\Client;
use App\Models\Competences;
use App\Models\ExpertTech;
use App\Models\Facture;
use App\Models\RespoTech;
use App\Models\Rapport;
use App\Models\Mission;
define ('DEBUG', false);
include('mysql.php');

/**
 * Ce fichier est utilisé par la console pour créer les tables dans la base de données, la commande 'php spacewich populate' exécute l'ensemble de ce fichier
 */

$db = new Database\Database();

//Création des tables

$db->createTable('articles', 
[
    'title' => 'string',
    'description' => 'string',
    'category_id' => 'int'
]);

$db->createTable('categories', [
    'title' => 'string'
]);

$db->createTable('users', [
    'username' => 'string',
    'password' => 'string'
]);

?>