<?php

namespace Core\Console\Commands;

use Core\Console\Command;
use Core\Console\Console;
use Core\Console\Colors;

class Serve extends Command {

    protected $name = 'serve';

    protected $description = "Démarre un serveur PHP";

    /**
     * Le code a exécuter est à mettre dans cette méthode
     */
    public function handle() {
        $colors = new Colors();
        Console::write($colors->getColoredString('Un serveur PHP a été démarré ! >>>>>>>>>>>>>> ', "blue"));
        Console::write($colors->getColoredString('http://localhost:8000', 'yellow'));
        Console::write("\n");
        shell_exec('php -S localhost:8000');
    }
}


?>