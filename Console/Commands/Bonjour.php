<?php

namespace Console\Commands;

use Console\Command;
use Console\Console;

class Bonjour extends Command {

    protected $name = 'bonjour';

    protected $description = "Salut !";

    public function handle() {
        Console::write('Hello world !');
    }
}


?>