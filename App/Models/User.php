<?php

namespace App\Models;

use Core\Arch\Model;
use Core\Auth\Authenticable;
use App\Models\Category;

class User extends Model {

    use Authenticable;

    protected $fillable = ['username', 'password'];

    static protected $table = 'users';

    public function getCategory() {
        $category = Category::getById($this->category_id);
        if ($category->id == NULL) {
            $category->title = '-';
        }
        return $category;
    }
}