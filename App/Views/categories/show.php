<?php
/* @var Database $db */
require ROOT . "/App/Views/partials/header.php";
?>
<?php
/* @var Model $id */

/* @var GlobalController $article */
/* @var GlobalController $category */
?>

    <div class="jumbotron jumbotron-fluid mt-5">
        <div class="container">
            <h1 class="display-4 "><?php echo $cat->title ?></h1>
            <h4 class="display-5 border-bottom border-primary mb-2 p-2">Liste des articles appartenant à cette
                catégorie</h4>
            <div class="row align-items-center text-center">
                <?php if ($cat->getArticlesFromCategory() !== NULL): ?>
                    <?php foreach ($cat->getArticlesFromCategory() as $article): ;?>
                        <div class="col-12 col-md-6 col-lg-4 my-5">
                            <a href="/article?id=<?php echo $article->id ?>" class="btn bt-primary bg-primary text-white"><h4 class="display-6 "><?= $article->title ?></h4></a>
                        </div>
                    <?php endforeach ?>
                <?php else: ?>
                    <div class="my-5 w-100">
                        <h4 class="display-6 text-center w-100">Aucun article n'est associé à cette catégorie</h4>
                    </div>
                <?php endif ?>
            </div>
            <a href="/" class="btn btn-warning mt-2"><- Go back</a>
        </div>

    </div>

<?php
require ROOT . "/App/Views/partials/footer.php";
?>