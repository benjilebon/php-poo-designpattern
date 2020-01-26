<?php

namespace App\Models;

use Core\Arch\Model;
use App\Models\Category;

class Article extends Model {
    protected $fillable = ['title', 'description', 'category_id'];

    static protected $table = 'articles';

    public function getCategory() {
        $category = Category::getById($this->category_id);
        if ($category->id == NULL) {
            $category->title = '-';
        }
        return $category;
    }
}