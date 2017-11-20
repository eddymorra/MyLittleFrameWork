<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyFrameWork</title>
    <link rel="stylesheet" href="<?= $base."public/css/style.css"; ?>">
</head>
<body>
    
    <header>
        <h1>Bienvenue sur MyFrameWork 1.0</h1>
        <nav>
            <ul>
                <li><a href="<?= $base.""; ?>">Liste</a></li>
                <li><a href="<?= $base."contact"; ?>">Contact</a></li>
            </ul>
        </nav>
        <hr>
    </header>

    <main>
        <?php require_once(ROOT."/views/contents/".$content.".php"); ?>
        <br><br>
    </main>

    <footer>
        <hr>
        MyFrameWork - Thibaut Couturier - 2017
    </footer>

</body>
</html>