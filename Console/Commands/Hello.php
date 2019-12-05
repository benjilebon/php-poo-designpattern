<?php

namespace Console\Commands;

use Console\Command;
use Console\Console;

class Hello extends Command {

    protected $name = 'hello';

    protected $description = "Hello World !";

    public function handle() {
        Console::write('Hello world !');
    }
}


?>