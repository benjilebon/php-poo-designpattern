<?php

use Console\Command;
use Console\Handle;

class Hello implements Command {

    protected $name = 'hello';

    protected $description = "Hello World !";

    public function handle() {
        Console::write('Hello world !');
    }
}


?>