<?php
define ('DEBUG', false);
include('mysql.php');

use App\Models\Article;
use App\Models\Category;
use App\Models\User;

/**
 * Ce fichier est utilisé par la console pour remplir les tables de valeurs prédéfinis, ici par exemple: les compétences & départements
 */

$db = new Database\Database();


// (new Article(['title' => 'Test Article 1', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati accusantium, accusamus veritatis non expedita velit at optio reprehenderit sunt.', 'category_id' => 1]))->create();
// (new Article(['title' => 'Test Article 2', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati accusantium, accusamus veritatis non expedita velit at optio reprehenderit sunt.', 'category_id' => 1]))->create();
// (new Article(['title' => 'Test Article 3', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati accusantium, accusamus veritatis non expedita velit at optio reprehenderit sunt.', 'category_id' => 1]))->create();
// (new Article(['title' => 'Test Article 4', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati accusantium, accusamus veritatis non expedita velit at optio reprehenderit sunt.', 'category_id' => 1]))->create();
// (new Article(['title' => 'Test Article 5', 'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati accusantium, accusamus veritatis non expedita velit at optio reprehenderit sunt.', 'category_id' => 1]))->create();

// (new Category(['title' => 'Catégorie 1']))->create();
// (new Category(['title' => 'Catégorie 2']))->create();

(new User(['username' => 'root', 'password' => 'root']))->create();

?>

