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


    <?php
        $message = "Merci {$_POST['user_lastname']} {$_POST['user_firstname']} de nous avoir contacté à propos de “{$_POST['user_subject']}”. <br>
        Un de nos conseiller vous contactera soit à l’adresse {$_POST['user_mail']} ou par téléphone au {$_POST['user_tel']} dans les plus brefs délais pour traiter votre demande : <br>
        {$_POST['user_message']}";
        echo $message;
    ?>
</body>
</html>