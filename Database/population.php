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

include('mysql.php');

/**
 * Ce fichier est utilisé par la console pour créer les tables dans la base de données, la commande 'php spacewich populate' exécute l'ensemble de ce fichier
 */

$db = new Database\Database();

//Création des tables
$db->createTable('admin', 
    [
    'name'                  => 'string', 
    'firstname'             => 'string', 
    'birthDate'             => 'datetime', 
    'address'               => 'string', 
    'maritalStatus'         => 'string', 
    'salary'                => 'float', 
    'yearsInCompany'        => 'int',
    'fonction'              => 'string'
]);

$db->createTable('devis', 
     [
    'dateDevis'             => 'datetime', 
    'montant'               => 'int'
]);

$db->createTable('departement', 
    [
    'name'                  => 'string',
    'expertise'             => 'string'
]);

$db->createTable('clients', 
    [
    'nomSociete'            => 'string',
    'nomContact'            => 'string',
    'numeroContact'         => 'int'
]);

$db->createTable('expert_tech', 
    [
    'name'                  => 'string', 
    'firstname'             => 'string', 
    'birthDate'             => 'datetime', 
    'address'               => 'string', 
    'maritalStatus'         => 'string', 
    'salary'                => 'float', 
    'yearsInCompany'        => 'int',
    'departement'           => 'string',
    'competences'           => 'json',
    'disponible'            => 'boolean'
]);

$db->createTable('competences', 
    [
    'name'                  => 'string',
    'competence'            => 'string',
]);

$db->createTable('factures', 
     [
    'dateFacture'           => 'datetime', 
    'montant'               => 'int'
]);

$db->createTable('respo_tech', 
     [
    'name'                  => 'string', 
    'firstname'             => 'string',
    'birthDate'             => 'datetime', 
    'address'               => 'string', 
    'maritalStatus'         => 'string', 
    'salary'                => 'float', 
    'yearsInCompany'        => 'int',
    'departement'           =>'string'
]);

$db->createTable('mission', 
     [
    'dateDebutMission'      => 'datetime',
    'dateFinMission'        => 'datetime',  
    'description'           => 'string',
    'nombreTech'            =>'int'
]);

$db->createTable('rapports', 
     [
    'dateDebutMission'      => 'datetime',
    'dateFinMission'        => 'datetime',  
    'description'           => 'string',
    'nombreTech'            =>'int',
    'montantMission'        =>'int'
]);


?>