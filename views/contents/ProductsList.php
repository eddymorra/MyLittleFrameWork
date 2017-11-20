<h3>Liste de produits :</h3>

<a class="btn blue" href="<?= $base."add"; ?>">Ajouter un produit</a>

<ul>
    <?php foreach ($productsList as $product) { ?>
        <li>
            <a href="product/<?= $product->id; ?>">
                <img src="<?= $base."public/images/".$product->image; ?>" alt="image du langage">
                <span><?= $product->nom; ?></span>
            </a>
        </li>
    <?php } ?>
</ul>