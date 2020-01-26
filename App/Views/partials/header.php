<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Filmer</title>

    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">The MVC Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Articles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categories">Categories</a>
            </li>
            <li class="nav-item">
                <?php if (App\Models\User::authentified()): ?>
                    <a class="nav-link" href="/admin">Connecté en tant que : <?php echo $_SESSION['user']->username ?></a>
                <?php else: ?>
                    <a class="nav-link" href="/login">Login</a>
                <?php endif ?>
            </li>
        </ul>
    </div>
</nav>

<!-- Begin page content -->
<div class="container">