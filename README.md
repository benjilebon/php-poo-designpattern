# PHP Design Pattern

Class exercise

**All phpDoc references in this project is in french**

Yup, I know about securities issues in this code

# How to use it :

Start by cloning this git with git clone

```bash
git clone https://github.com/benjilebon/php-poo-designpattern.git
```

Change the *Database/mysql.php* connection infos file in the Database class on the construct method

```php
$host = 'hostname';
$dbname = 'name of the database';
$user = 'mysql username';
$password = 'mysql password';
```

# Using the Integrated CLI

This repo comes with an Integrated CLI, all from scratch called "spacewich", it's a mix between a sandwich and space, yup

The CLI is in french for understanding purposes

To use it, type in console :

```php spacewich```

spacewich comes with 3 commands for this exercise: populate, serve and seed. populate creates all the tables, serve opens a PHP server to test the application and seed fills the tables with data

To create the tables :

```php spacewich populate```

To fill the tables with fixed datas (here competences and departments):

```php spacewich seed```

When it's done, you should be able to start the server and use the application, using :

```php spacewich serve```




# The "playfield"

The application is intended to be tested on the *main.php* file, present at the root folder.

the repo comes with a prefilled file, demonstrating how to use it
