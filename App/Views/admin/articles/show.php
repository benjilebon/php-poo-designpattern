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
            <form method="POST" action="http://<?php echo $request->serverName ?>:<?php echo $request->serverPort?>/admin/article/update">
                <input type="hidden" name="id" class="display-5 border-bottom border-secondary p-2 mb-3" value="<?php echo $article->id?>">

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">Titre de l'article</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="title" value="<?php echo $article->title?>" required autocomplete="title" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">Texte de l'article</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control" name="description" value="<?php echo $article->description?>" required autocomplete="description" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category_id" class="col-md-4 col-form-label text-md-right">ID de la catégorie de l'article</label>

                    <div class="col-md-6">
                        <input id="category_id" type="text" class="form-control" name="category_id" value="<?php echo $article->category_id?>" required autocomplete="category_id" autofocus>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Envoyer
                        </button>
                    </div>
                </div>
            </form>
            <a href="/" class="btn btn-warning mt-2"><- Go back</a>
        </div>

    </div>

<?php
require ROOT . "/App/Views/partials/footer.php";
?>