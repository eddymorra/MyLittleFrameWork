<h3>Ajouter un produit :</h3>

<?php
if(isset($message)) {
    echo $message;
    ?>
        <br><br><a class="btn" href="<?= BASE ?>">Retour</a>
    <?php
} else {
    ?>
        <form action="" method="post">
            <label for="name">Titre du produit</label>
            <input id="name" type="text" name="name">

            <label for="description">Description du produit</label>
            <textarea id="description" name="description"></textarea>

            <label for="price">Prix</label>
            <input id="price" type="number" name="price" value="9" class="moitie">

            <label for="image">Image</label>
            <select id="image" name="image" class="moitie">
                <option value="0" selected>Général</option>
                <option value="1">Javascript</option>
                <option value="2">Php</option>
                <option value="3">Angular 2</option>
                <option value="4">Symfony</option>
                <option value="5">Github</option>
                <option value="6">Node.js</option>
                <option value="7">React</option>
                <option value="8">Vue.js</option>
                <option value="9">Pas de photo</option>
            </select>

            <button type="submit" class="btn large green">Ajouter</button>
        </form>
    <?php
}
?>