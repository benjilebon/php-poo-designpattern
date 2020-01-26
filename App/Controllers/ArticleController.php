<?php

namespace App\Controllers;

use Core\Controller\Controller;
use App\Models\Article;

class ArticleController extends Controller {
    public function index() {
        $articles = Article::getAll();

        return $this->render('articles.index', compact('articles'));
    }
    public function show($request) {
        $article = Article::getById($request->arg);

        return $this->render('articles.show', compact('article'));
    }

}