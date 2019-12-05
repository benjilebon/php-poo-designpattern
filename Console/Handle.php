<?php

namespace Console;

use Console\Colors;
use Console\Command;

class Console {
    private $primary, $secondary;
    private $space = '  ';
    private $c;
    private $commands;

    /**
     * 
     * Le constructor met en place les couleurs
     * 
     */
    function __construct() {
        $this->primary = "purple";
        $this->secondary = "blue";
        $this->c = new Colors();
    }

    /**
     * 
     * Cette méthode constitue le coeur de la console, il analyse les arguments passés et s'occupe d'afficher l'help
     * 
     */
    public function boot() {
        //Sinon $argv n'existe pas...
        global $argv;

        //On récupère la liste des classes des commandes déclarées dans le fichier commands_list.php
        $list = require 'commands_list.php';
        $this->register($list['commands']);

        //Si il n'y a pas d'arguments, on affiche les informations du CLI
        if (!isset($argv[1])) {
            $this->write('Spacewich "Framework" '.$this->c->getColoredString("v0.1", $this->primary, null)."\n");
            $this->write('By '.$this->c->getColoredString('Léonard Martin', $this->primary).' & '.$this->c->getColoredString('Benjamin Lebon', $this->primary));
            $this->showHelp();
            $this->showCommands();
        } else {
            $this->handleCommand($argv[1]);
        }
    }

    /**
     * 
     * Enregistre les commandes dans l'objet en les stockant dans l'attribut commands
     * 
     * @param Array     $commands
     */
    private function register(Array $commands) {
        foreach($commands as $command) {
            $o = new $command;
            $this->commands[$o->showName()] = $o;
        }
    }

    /**
     * 
     * Écrit dans la console
     * 
     * @param String     "Hello world !"
     * @return String    Retourne la valeur écrite
     */
    public function write(String $string) {
        echo $string;
        return $string;
    }

    /**
     * 
     * Affiche la syntaxe d'utilisation du CLI
     * 
     */
    private function showHelp() {
        $this->write("\n\n");
        $this->write($this->c->getColoredString('Usage:', $this->secondary)."\n");
        $this->write($this->space.'php spacewich [command]'."\n\n");
    }

    /**
     * 
     * Affiche les commands disponibles dans le CLI
     * 
     */
    private function showCommands() {
        $this->write($this->c->getColoredString('Commandes Disponibles:', $this->secondary)."\n");
        foreach ($this->commands as $command) {
            $this->setCursor($this->write($this->space.$this->c->getColoredString($command->showName(), $this->primary)), 20);
            $this->write($command->showDescription());
            $this->write("\n");
        }
    }

    /**
     * 
     * Met en place le curseur de la console sur une certaine position
     * 
     * Cette fonction est uniquement utilisé pour afficher la description des commandes de manière espacé au nom
     * 
     * @param String        $line       Il faut impérativement mettre dans ce paramètre la string qui a été écrite sur la même ligne
     * @param Integer       $x          Décalage en nombre d'espace à faire 
     */
    private function setCursor($line,$x) {
        $toSkip = $x*2 - strlen($line);

        for ($i = 0; $i <= $toSkip; $i++) {
            echo ' ';
        }
    }

    /**
     * 
     * Permet de gérer l'argument passé et d'executer la bonne commande
     * 
     * @param String        $arg       Représente l'argument passé
     */
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