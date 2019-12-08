<?php
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


/**
 * Chargement du fichier principal ou on utilise tout notre code
 * 
 * C'est ici qu'on instancie les models, manipule la base de données etc.
 * 
 */
require_once 'main.php';



?>










































?>