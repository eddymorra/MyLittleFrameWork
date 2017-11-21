<h3>Détails du produit</h3>

<img class="imgdetail" src="<?= BASE."public/images/".$product->image; ?>" alt="image du langage">

<?php

echo "<h4>".$product->nom."</h4>";

echo "<p>".$product->description."</p>";

echo "<p>Prix : ".$product->prix." €</p><br>";

echo "<i>Publié le : ".$product->date."</i><br><br>";

?>

<a class="btn" href="<?= BASE ?>">Retour</a>
<a class="btn green" href="<?= BASE."edit-product/".$product->id ?>">Modifier ce produit</a>

