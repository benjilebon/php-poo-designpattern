<?php

namespace Core\Controller;


abstract class Controller {
    public function render($view, $values) {
        $pathView = str_replace(".", "/", $view);
        ob_start();
        extract($values);
        require ROOT . '/App/Views/' . $pathView . '.php';
    }

    public function redirect($route, $request) {
        header('Location: http://'.$request->serverName.':'.$request->serverPort.$route);
        exit();
    }
}



