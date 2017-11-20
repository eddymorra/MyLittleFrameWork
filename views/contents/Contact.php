<h3>Contactez-nous :</h3>

<?php
if(isset($message)) {
    echo $message;
    ?>
        <br><br><a class="btn" href="<?= $base ?>">Retour</a>
    <?php
} else {
    ?>
        <form action="" method="post">
            <input type="text" placeholder="Votre nom" name="name">
            <input type="text" placeholder="Votre adresse email" name="email">
            <textarea name="message"></textarea>
            <button type="submit" class="btn green">Envoyer</button>
        </form>
    <?php
}
?>