<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyLittleFrameWork</title>
    <link rel="stylesheet" href="<?= BASE."public/css/style.css"; ?>">
</head>
<body>
    
    <header>
        <h1>MyLittleFrameWork 1.0</h1>
        <nav>
            <ul>
                <li><a href="<?= BASE.""; ?>">Liste de produits</a></li>
                <li><a href="<?= BASE."add-product"; ?>">Ajouter un produit</a></li>
                <li><a href="<?= BASE."contact"; ?>">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php require_once(ROOT."/views/contents/".$content.".php"); ?>
        <br><br>
    </main>

    <footer>
        <hr>
        MyLittleFrameWork - v1.0 - Thibaut Couturier - 2017
    </footer>

</body>
</html>