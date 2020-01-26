<?php
/* @var GlobalController $this */
/* @var Model/Category $category */
require ROOT . "/App/Views/partials/header.php";
?>

    <!--    <a class="btn btn-default" href="/index.php?page=show_movies&id=--><?php //echo $value['id']; ?><!--">Info</a>-->

    <div class="row mt-5">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $category): ?>
                <tr class="border">
                    <td class="border"><?= $category->id ?></td>
                    <td class="border"><?= $category->title ?></td>
                    <td><a href="/category?id=<?php echo $category->id ?>" class="btn btn-primary rounded-pill">Info</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


<?php
require ROOT . "/App/Views/partials/footer.php";
?>