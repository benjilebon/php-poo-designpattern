<?php

namespace App\Controllers;

use Core\Controller\Controller;
use App\Models\Category;

class CategoryController extends Controller {

    public function show($request) {
        $cat = Category::getById($request->arg);

        return $this->render('categories.show', compact('cat'));
    }

    public function index() {
        $categories = Category::getAll();

        return $this->render('categories.index', compact('categories'));
    }

}