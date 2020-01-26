<?php

define ('ROOT', __DIR__);
define ('DEBUG', false);

try {
    require './Database/mysql.php';
} catch (\Exception $e) {
    echo "<br> Erreur lors de la connexion à la base de données";
}

/**
 * Ce code permet d'initier l'autoload permettant à PHP d'automatiquement importer les class sans préciser leur emplacement précis
 * 
 * Toute importation par de / (root folders)
 * 
 * ex: use App\Models\Admin
 * 
 */
spl_autoload_register(function ($class_name) {
    $p = str_replace('\\', '/', $class_name);
    include $p . '.php';
});

\session_start();


/**
 * Chargement des routes de l'application..
 * 
 */
require_once 'routes.php';













































?>