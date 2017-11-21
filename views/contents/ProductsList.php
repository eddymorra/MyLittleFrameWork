<h3>Liste de produits :</h3>

<ul>
    <?php foreach ($productsList as $product) { ?>
        <li>
            <a href="product/<?= $product->id; ?>">
                <img src="<?= BASE."public/images/".$product->image; ?>" alt="image du langage">
                <span><?= $product->nom; ?></span>
            </a>
        </li>
    <?php } ?>
</ul>