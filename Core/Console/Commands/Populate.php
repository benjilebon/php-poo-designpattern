<?php

namespace Core\Console\Commands;

use Core\Console\Command;
use Core\Console\Console;
use Core\Console\Colors;

class Populate extends Command {

    protected $name = 'populate';

    protected $description = "Crée les tables et les colonnes";

    /**
     * Le code a exécuter est à mettre dans cette méthode
     */
    public function handle() {
        $colors = new Colors();
        try {
            require_once(__DIR__.'\..\..\..\Database\population.php');
        }
        catch (\Exception $e) {
            Console::write($colors->getColoredString('Une erreur est survenu lors de la population de la base de données !', "red"));
            return;
        }
        Console::write($colors->getColoredString('Les tables ont bien été crées !', "green"));
    }
}


?>