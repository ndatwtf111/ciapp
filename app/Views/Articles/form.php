<label for="title">Title</label>
<input type="text" name="title" id="title" value="<?= old("title", esc($article->title) ) ?>">

<label for="content">content</label>
<textarea name="content" id="content" ><?= old("content", esc($article->content)) ?></textarea>

<button>Save</button>