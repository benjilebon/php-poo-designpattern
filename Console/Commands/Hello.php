<?php

namespace Console\Commands;

use Console\Command;
use Console\Console;

class Hello extends Command {

    protected $name = 'hello';

    protected $description = "Hello World !";

    /**
     * Le code a exécuter est à mettre dans cette méthode
     */
    public function handle() {
        Console::write('Hello world !');
    }
}


?>