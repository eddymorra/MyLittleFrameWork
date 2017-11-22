<h3>Détails du produit</h3>

<img class="imgdetail" src="<?= BASE."public/images/".$product->image; ?>" alt="image du langage">

<h4><?= $product->nom; ?></h4>
<p><?= $product->description; ?></p>
<p>Prix : <?= $product->prix; ?> €</p><br>
<i>Publié le : <?= $product->date; ?></i><br><br>

<a class="btn" href="<?= BASE; ?>">&larr; Retour</a>
<a class="btn green" href="<?= BASE."edit-product/".$product->id; ?>">Modifier ce produit</a><br><br>

<hr>

<?php
if (count($comments) > 0) {
    ?>
        <ul class="comments">
        <?php foreach ($comments as $comment) { ?>
            <li>
                <p>&rArr; <?= $comment->commentaire; ?></p>
                <span><?= $comment->pseudo; ?> </span><i> le <?= $comment->date; ?></i>
            </li>
        <?php } ?>
        </ul>
    <?php
} else {
    echo "Aucun commentaire pour ce produit ...";
}
?>

<form class="newComment" action="" method="post">
    <input type="text" name="pseudo" placeholder="Pseudo..." required>
    <input type="text" name="comment" placeholder="Ecrire un commentaire ..." required>
    <button type="submit" class="btn">Envoyer</button>
</form>



