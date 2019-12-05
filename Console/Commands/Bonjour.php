<?php

namespace Console\Commands;

use Console\Command;
use Console\Console;

class Bonjour extends Command {

    protected $name = 'bonjour';

    protected $description = "Salut !";

    /**
     * Le code a exécuter est à mettre dans cette méthode
     */
    public function handle() {
        Console::write('Hello world !');
    }
}


?>