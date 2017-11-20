<h3>Ajouter un produit :</h3>

<?php
if(isset($message)) {
    echo $message;
    ?>
        <br><br><a class="btn" href="<?= $base ?>">Retour</a>
    <?php
} else {
    ?>
        <form action="" method="post">
            <input type="text" placeholder="Nom du produit" name="name">
            <textarea name="description" placeholder="Description du produit"></textarea>
            <input type="number" name="price">
            <button type="submit" class="btn green">Ajouter</button>
        </form>
    <?php
}
?>