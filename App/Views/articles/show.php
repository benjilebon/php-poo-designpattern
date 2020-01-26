<?php
/* @var Database $db */
require ROOT . '/App/Views/partials/header.php';
?>
<?php
/* @var Model $id */

/* @var GlobalController $article*/
/* @var GlobalController $categories*/
?>

    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
            <h1 class="display-4"><?php echo $article->id ?></h1>
            <h4 class="display-5 border-bottom border-secondary p-2 mb-3">Category: <?php echo $article->getCategory()->title ?>
                <a href="/category?id=<?php echo $article->getCategory()->id ?>" class="btn btn-primary float-right p-2">Infos about this category -></a></h4>
            <p class="lead"><?php echo $article->description ?></p>
            <a href="/" class="btn btn-warning mt-2"><- Go back</a>
        </div>

    </div>

<?php
require ROOT . "/App/Views/partials/footer.php";
?>