<?php

require_once 'Colors.php';

class Console {
    private $primary, $secondary;

    function __construct() {
        $this->primary = "purple";
        $this->secondary = "blue";
    }

    public function boot() {
        $this->write("\n");

        if (!isset($argv[1])) {
            $c = new Colors();
            $this->write('Spacewich "Framework" '.$c->getColoredString("v0.1", $this->primary, null)."\n");
            $this->write('By '.$c->getColoredString('Léonard Martin', $this->primary).' & '.$c->getColoredString('Benjamin Lebon', $this->primary));
        }
    }

    private function write(String $string) {
        echo $string;
    }
}






?>