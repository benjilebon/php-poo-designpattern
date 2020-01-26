<?php

namespace App\Controllers;

use Core\Controller\Controller;
use Core\Auth\Auth;
use App\Models\User;

class UserController extends Controller {

    public function loginPage($request) {
        return $this->render('login', []);
    }

    public function login($request) {
        $infos = $request->getBody();

        if (User::authenticate($infos['username'], $infos['password'])) {
            return $this->redirect('/admin', $request);
        } else {
            return $this->redirect('/login', $request);
        }

    }

    public function logout($request) {
        User::logout();

        return $this->redirect('/', $request);
    }


    public function index() {
        $categories = Category::getAll();

        return $this->render('categories.index', compact('categories'));
    }

}