<?php

require_once 'Colors.php';

class Console {
    private $primary, $secondary;
    private $space = '  ';
    private $c;

    function __construct() {
        $this->primary = "purple";
        $this->secondary = "blue";
        $this->c = new Colors();
    }

    public function boot() {

        if (!isset($argv[1])) {
            $this->write('Spacewich "Framework" '.$this->c->getColoredString("v0.1", $this->primary, null)."\n");
            $this->write('By '.$this->c->getColoredString('Léonard Martin', $this->primary).' & '.$this->c->getColoredString('Benjamin Lebon', $this->primary));
            $this->showHelp();
        } else {
            $this->handleCommand($argv[1]);
        }
    }

    private function write(String $string) {
        echo $string;
    }

    private function showHelp() {
        $this->write("\n\n");
        $this->write($this->c->getColoredString('Usage:', $this->secondary)."\n");
        $this->write($this->space.'php spacewich [command]');
    }
}






?>