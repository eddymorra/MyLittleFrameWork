<h3>Ajouter un produit :</h3>

<?php
if(isset($message)) {
    echo $message;
    ?>
        <br><br><a class="btn" href="<?= BASE ?>">Retour</a>
    <?php
} else {
    require_once(ROOT.'/views/contents/forms/ProductForm.php');
}
?>