<?php

namespace Console;

use Console\Colors;
use Console\Command;

class Console {
    private $primary, $secondary;
    private $space = '  ';
    private $c;
    private $commands;

    function __construct() {
        $this->primary = "purple";
        $this->secondary = "blue";
        $this->c = new Colors();
    }

    public function boot() {
        global $argv;

        $list = require 'commands_list.php';
        $this->register($list['commands']);

        if (!isset($argv[1])) {
            $this->write('Spacewich "Framework" '.$this->c->getColoredString("v0.1", $this->primary, null)."\n");
            $this->write('By '.$this->c->getColoredString('Léonard Martin', $this->primary).' & '.$this->c->getColoredString('Benjamin Lebon', $this->primary));
            $this->showHelp();
            $this->showCommands();
        } else {
            $this->handleCommand($argv[1]);
        }
    }

    private function register(Array $commands) {
        foreach($commands as $command) {
            $o = new $command;
            $this->commands[$o->showName()] = $o;
        }
    }

    public function write(String $string) {
        echo $string;
        return $string;
    }

    private function showHelp() {
        $this->write("\n\n");
        $this->write($this->c->getColoredString('Usage:', $this->secondary)."\n");
        $this->write($this->space.'php spacewich [command]'."\n\n");
    }

    private function showCommands() {
        $this->write($this->c->getColoredString('Commandes Disponibles:', $this->secondary)."\n");
        foreach ($this->commands as $command) {
            $this->setCursor($this->write($this->space.$this->c->getColoredString($command->showName(), $this->primary)), 20);
            $this->write($command->showDescription());
            $this->write("\n");
        }
    }

    private function setCursor($line,$x) {
        $toSkip = $x*2 - strlen($line);

        for ($i = 0; $i <= $toSkip; $i++) {
            echo ' ';
        }
    }

    private function handleCommand($arg) {

        if (array_key_exists($arg, $this->commands)) {
            $this->commands[$arg]->handle();
        } else {
            $this->write('Spacewich "Framework" '.$this->c->getColoredString("v0.1", $this->primary, null)."\n");
            $this->write('By '.$this->c->getColoredString('Léonard Martin', $this->primary).' & '.$this->c->getColoredString('Benjamin Lebon', $this->primary));
            $this->showHelp();
            $this->showCommands();
        }
        
    }
}






?>