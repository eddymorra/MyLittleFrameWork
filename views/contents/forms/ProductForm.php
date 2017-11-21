<form action="" method="post">
    <label for="name">Titre du produit</label>
    <input id="name" type="text" name="name" value="<?php if(isset($product)) { echo $product->nom; } ?>" required>

    <label for="description">Description du produit</label>
    <textarea id="description" name="description" required><?php if(isset($product)) { echo $product->description; } ?></textarea>

    <label for="price">Prix</label>
    <input id="price" type="number" name="price" value="<?php if(isset($product)) { echo $product->prix; } ?>" class="moitie" required>

    <label for="image">Image</label>
    <select id="image" name="image" class="moitie" required>
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

    <button type="submit" class="btn large blue">Enregistrer ce produit</button>
</form>