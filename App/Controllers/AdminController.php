<?php

namespace App\Controllers;

use Core\Controller\Controller;
use App\Models\Article;

class AdminController extends Controller {

    public function indexArticles($request) {
        if (!\App\Models\User::authentified()) {
            return $this->redirect('/login', $request);
        }

        $articles = Article::getAll();

        return $this->render('admin.articles.index', compact('articles'));
    }
    public function showArticle($request) {
        $article = Article::getById($request->arg);

        return $this->render('admin.articles.show', compact('article', 'request'));
    }

    public function updateArticle($request) {
        if (!\App\Models\User::authentified()) {
            return $this->redirect('/login', $request);
        }


        $data = $request->getBody();

        $article = Article::getById($data['id']);
        $article->title = $data['title'];
        $article->description = $data['description'];
        $article->category_id = $data['category_id'];
        $article->save();

        return $this->redirect('/admin', $request);

    }

    public function deleteArticle($request) {
        if (!\App\Models\User::authentified()) {
            return $this->redirect('/login', $request);
        }

        $article = Article::getById($request->arg);
        $article->delete();

        return $this->redirect('/admin', $request);
    }

}