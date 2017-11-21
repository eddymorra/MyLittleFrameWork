<h3>Contactez-moi :</h3>

<?php
if(isset($message)) {
    echo $message;
    ?>
        <br><br><a class="btn" href="<?= BASE ?>">Retour</a>
    <?php
} else {
    ?>
        <form action="" method="post">
            <input type="text" placeholder="Votre nom ..." name="name" required>
            <input type="text" placeholder="Votre email ..." name="email" required>
            <textarea name="message" placeholder="Votre message ..." required></textarea>
            <button type="submit" class="btn large blue">Envoyer ce message</button>
        </form>
    <?php
}
?>