<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'>
<meta name='description' content='Mon formulaire de contact'/>
<link rel='stylesheet' href=''>
<script src='' defer></script>
<title>Mon formulaire de contact</title>
</head>
<body>
    <h1>Mon formulaire de contact</h1>
    <form action="form.php" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>
</body>
</html>

<?php
    var_dump($_POST);
    echo  $_POST['user_name'];
?>