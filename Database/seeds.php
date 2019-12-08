<?php

// use App\Models\Admin;
use App\Models\Departement;
// use App\Models\Devis;
// use App\Models\Client;
use App\Models\Competence;
// use App\Models\ExpertTech;
// use App\Models\Facture;
// use App\Models\RespoTech;
// use App\Models\Rapport;
// use App\Models\Mission;

include('mysql.php');

/**
 * Ce fichier est utilisé par la console pour remplir les tables de valeurs prédéfinis, ici par exemple: les compétences & départements
 */

$db = new Database\Database();

(new Competence(['name' => 'JS', 'competence' => 'NodeJS, jQuery']))->create();
(new Competence(['name' => 'PHP', 'competence' => 'Laravel, PHPPOO, Symfony']))->create();
(new Competence(['name' => 'Python', 'competence' => 'Django, Data Visualization']))->create();
//On se limitera à 3 compétences pour l'exemple


(new Departement(['name' => 'Réalité Virtuelle', 'expertise' => "Création d'application VR"]));
(new Departement(['name' => "Système d'Information", 'expertise' => "Création de système pour des réseaux entreprises"]));
(new Departement(['name' => "Web", 'expertise' => "Création de sites internet"]));
(new Departement(['name' => "Informatique Embarquée", 'expertise' => "IoT & Objets connectées"]));
(new Departement(['name' => "Réseau et sécurité", 'expertise' => "Protection contre le hack & exploits"]));  


?>