<?php

/**
 * C'est dans ce fichier que toute l'utilisation de l'application va se dérouler
 * 
 * Pour commencer, essayons de créer un expert technique :
 */

 use App\Models\ExpertTech; //Grâce à l'autoload, on peut utiliser le use pour charger notre model
 use App\Models\Competence;


$expert = new ExpertTech([
    'firstname'     => 'bob', //ExpertTech étends collaborateur, il faut aussi préciser les champs de collaborateur
    'name'          => 'doe',
    'birthDate'     => new DateTime('23-11-1999'),
    'address'       => '3 rue du test',
    'maritalStatus' => 'single',
    'salary'        => 1999.00,
    'yearsInCompany'=> 0,
    'departement'   => 'Réalité Virtuelle',
    'competences'   => ['PHP', 'JS'], 
    'disponible'    => 'oui'
]); //Il est possible que certains types fassent encore buguer l'application...

//Pour l'insérer dans la base de données, il faut utiliser la méthode create() :
$expert->create(); //En cas d'erreur, l'exception renvoyé contient le type problématique avec le nom de la colonne


//Dans le cas ou on voudrait récupérer notre expert, on pourrait le récupérer de deux façons:
$getExpert = ExpertTech::getById(1);                //Avec L'ID
$getExpert = ExpertTech::whereEqual('name', 'doe'); //Avec son nom
//Les deux méthodes retournent un objet ExpertTech, on peut donc enchainer les méthodes dessus...
var_dump($getExpert);


//...Par exemple pour le supprimer
try {
    $delExpert = ExpertTech::getById(10)->delete(); //Cause une erreur si delete est appelée sur un élément qui n'existe pas...
}
catch(\Error $e){}; //Dans le cadre de l'exemple, on ignore l'erreur ici pour continuer l'éxecution du code
//On peut enchainer getById et delete pour le supprimer.

//On peut aussi le modifier :
$updateExpert = ExpertTech::getById(3)->setName('lol');
//en utilisant les setters, la modification est automatiquement enregistré en base de données si on appelle la méthode save() dans le setter

?>