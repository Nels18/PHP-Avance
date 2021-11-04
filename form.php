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
        <form action="thanks.php" method="post">
            <div>
                <label for="lastname">Nom :</label>
                <input type="text" id="name" name="user_lastname">
            </div>
            <div>
                <label for="firstname">Prénom :</label>
                <input type="text" id="name" name="user_firstname">
            </div>
            <div>
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                <label for="phone">Téléphone :</label>
                <input type="tel" id="tel" name="user_tel">
            </div>
            <div>
                <select name="user_subject" id="subject">
                    <option value="Demande de renseignement">Demande de renseignement</option>
                    <option value="Demande de devis">Demande de devis</option>
                    <option value="Réclamation">Réclamation</option>
                </select>
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