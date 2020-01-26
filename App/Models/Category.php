<?php

namespace App\Models;

use Core\Arch\Model;
use App\Models\Article;

class Category extends Model {
    protected $fillable = ['title'];

    static protected $table = 'categories';

    public function getArticlesFromCategory() {
        $articles = Article::whereEqual('category_id', $this->id);
        return $articles;
    }
}