<?= $this->extend("layouts/default"); ?>
<?= $this->section("title"); ?>Articles<?= $this->endSection(); ?>

<?= $this->section("content") ?>
<h1>Articles</h1>

<h2><?= esc($article->title) ?></h2>
<p><?= esc($article->content) ?></p>
<a href="<?= url_to("Articles::edit", $article->id) ?>">Edit</a>
<a href="<?= url_to("Articles::delete", $article->id) ?>">Delete</a>
<?= $this->endSection(); ?>