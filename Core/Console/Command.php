<?php

namespace Core\Console;

abstract class Command {
    public function showName() {
        return $this->name;
    }

    public function showDescription() {
        return $this->description;
    }

    abstract public function handle();
}

?>