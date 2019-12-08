<?php

namespace Console\Commands;

use Console\Command;
use Console\Console;
use Console\Colors;

class Seed extends Command {

    protected $name = 'seed';

    protected $description = "Remplis les tables avec des valeurs du fichier seed.php";

    /**
     * Le code a exécuter est à mettre dans cette méthode
     */
    public function handle() {
        $colors = new Colors();
        try {
            require_once(__DIR__.'\..\..\Database\seeds.php');
        }
        catch (\Exception $e) {
            Console::write($colors->getColoredString('Une erreur est survenu lors du seeding des tables !', "red"));
            return;
        }
        Console::write($colors->getColoredString('Les tables ont bien été remplis !', "green"));
    }
}


?>