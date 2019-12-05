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

//Création des tables
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

$db->createTable('devis', 
     [
    'dateDevis'         => 'datetime', 
    'montant'         => 'int'
]);

$db->createTable('departement', 
    [
    'expertise'          => 'string'
]);

$db->createTable('clients', 
    [
    'nomSociete'          => 'string',
    'nomContact'          => 'string',
    'numeroContact' => 'int'
]);

$db->createTable('expert_tech', 
    [
    'name'              => 'string', 
    'firstname'         => 'string', 
    'birthDate'         => 'datetime', 
    'address'           => 'string', 
    'maritalStatus'     => 'string', 
    'salary'            => 'float', 
    'yearsInCompany'    => 'int',
    'departement'          => 'string',
    'competences'=>'string',
    'disponible'=>'string'
]);

$db->createTable('competences', 
    [
    'name'          => 'string',
    'firstname'          => 'string',
    'experience'=>'int',
    'competences' => 'string',
    'departement'=>'string'
]);

$db->createTable('factures', 
     [
    'dateFacture'         => 'datetime', 
    'montant'         => 'int'
]);

$db->createTable('respo_tech', 
     [
    'name'         => 'string', 
    'firstname'         => 'string',
    'departement'=>'string'
]);

$db->createTable('mission', 
     [
    'dateDebutMission'         => 'datetime',
    'dateFinMission' => 'datetime',  
    'description'         => 'string',
    'nombreTech'=>'int'
]);

$db->createTable('rapports', 
     [
    'dateDebutMission'         => 'datetime',
    'dateFinMission' => 'datetime',  
    'description'         => 'string',
    'nombreTech'=>'int',
    'montantMission'=>'int'
]);



// Tests 

// $test = new Admin([
//     'name'          => 'Doe',
//     'firstname'     => 'John',
//     'birthDate'     => new DateTime('2000-00-00'),
//     'address'       => '18 rue du test',
//     'maritalStatus' => 'Célibataire',
//     'salary'        => 2800.00,
//     'yearsInCompany'=> 0,
//     'fonction'      => 'Secrétaire'
// ]);
// $test->create();

// $aaaa = Admin::getById(5);
// $aaaa->delete(); 


// $test2 = new Departement([
//     'expertise' => 'Web'
// ]);
// $test2->create();

// $test3 = new Devis([
//     'dateDevis' => new DateTime('1994-04-21'),
//     'montant' => 666.66
// ]);
// $test3->create();

// $test4 = new Client([
//     'nomSociete'=> 'SKT T1',
//     'nomContact'=> 'Faker',
//     'numeroContact'=>0666666666
// ]);
// $test4->create();

// $test5 = new ExpertTech([
//     'name'              => 'Bill', 
//     'firstname'         => 'Gates', 
//     'birthDate'         => new DateTime('1994-04-21'), 
//     'address'           => ' 5, rue des arbres ', 
//     'maritalStatus'     => 'Célib', 
//     'salary'            => 4800.76, 
//     'yearsInCompany'    => '7',
//     'departement'          => 'Reconnaissance Visuelle',
//     'competences'=>'Python, Csharp, C',
//     'disponible'=>'Oui'
// ]);
// $test5->create();

// $test6 = new Competences([
//     'name'=>'Neymar',
//     'firstname'=>'JR',
//     'experience'=> 12,
//     'competences'=>'PHP,C++,Angular',
//     'departement'=>'Web'
// ]);
// $test6->create();

// $test7 = new Facture([
//     'dateFacture'=>new Datetime('1997-06-05'),
//     'montant'=>3565.65
// ]);
// $test7->create();

// $test8 = new RespoTech([
//     'name'=>'Respo' , 
//     'firstname'=>'Teck',
//     'departement'=>'Réseau & Sécurité'
// ]);
// $test8->create();

// $test9 = new Mission([
//     'dateDebutMission'         => new DateTime('2018-09-11'),
//     'dateFinMission' => new DateTime('2018-12-11'),  
//     'description'         => 'Refonte de site vitrine',
//     'nombreTech'=>2
// ]);
// $test9->create();

// $test10 = new Rapport([
//     'dateDebutMission'         => new DateTime('2018-09-11'),
//     'dateFinMission' => new DateTime('2018-12-11'),  
//     'description'         => 'Refonte de site vitrine',
//     'nombreTech'=>2,
//     'montantMission'=>10000
// ]);
// $test10->create();
?>