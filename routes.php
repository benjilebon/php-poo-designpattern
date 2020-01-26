<?php


use Core\Routing\Request;
use Core\Routing\Router;


$router = new Router(new Request);

$router->get("/", 'ArticleController@index');

$router->get("/article", 'ArticleController@show');

$router->get("/category", 'CategoryController@show');

$router->get('/categories', 'CategoryController@index');


//ADMIN
$router->get('/login', 'UserController@loginPage');
$router->post('/login', 'UserController@login');
$router->get('/logout', 'UserController@logout');

$router->get('/admin', 'AdminController@indexArticles');
$router->get('/admin/article', 'AdminController@showArticle');
$router->post('/admin/article/update', 'AdminController@updateArticle');
$router->get('/admin/article/delete', 'AdminController@deleteArticle');

