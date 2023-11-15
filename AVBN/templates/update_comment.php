<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>

<p><a href="index.php?action=post&id=<?= $comment->post ?>">Retour au billet</a></p>

<h2>Modification du commentaire</h2>

<form action="index.php?action=updateComment&id=<?= $comment->identifier ?>" method="post">
    <div>
        <label for="author">Auteur</label><br>
        <input type="text" name="auhor" id="author" value="<?= htmlspecialchars($comment->author) ?>">
    </div>
    <div>
        <label for="comment"></label><br>
        <textarea name="comment" id="comment" cols="30" rows="10"><?= htmlspecialchars($comment->comment) ?></textarea>
    </div>
    <div>
        <input type="submit">
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php'); ?>