<h3>Détails du produit</h3>

<img class="imgdetail" src="<?= BASE."public/images/".$product->image; ?>" alt="image du langage">

<?php

echo "<strong>".$product->nom."</strong><br><br>";

echo $product->description."<br><br>";

echo "Prix : ".$product->prix." €<br><br>";

echo "Publié le : ".$product->date."<br><br>";

?>

<a class="btn" href="<?= BASE ?>">Retour</a>

