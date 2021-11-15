<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <meta name='description' content='Mon formulaire de contact'/>
        <title>Mon formulaire de contact</title>
    </head>
    <body>
        <?php
            // Inputs values
            $userLastname = '';
            $userFirstname = '';
            $userEmail = '';
            $userTel = '';
            $userSubject = '';
            $userMessage = '';

            // Inputs errors messages
            $userLastnameErr = '';
            $userFirstnameErr = '';
            $userEmailErr = '';
            $userTelErr = '';
            $userSubjectErr = '';
            $userMessageErr = '';

            // Messages
            $succesMessage = '';
            $failMessage = '';

            // Checking datas
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                
                return $data;
            }

            // All inputs are required and must not be empty.
            if ('POST' == $_SERVER['REQUEST_METHOD']) {
                if (empty($_POST["user_lastname"])) {
                    $userLastnameErr .= "Un nom est requis" . ".<br>";
                    $failMessage .= $userLastnameErr;
                } else {
                    $userLastname = test_input($_POST["user_lastname"]);
                        if (!preg_match("/^[a-zA-Z-' ]*$/",$userLastname)) {
                            $userLastnameErr .= "Seul les lettres et les espaces sont acceptés pour le nom" . ".<br>";
                            $failMessage .= $userLastnameErr;
                        }
                }

                if (empty($_POST["user_firstname"])) {
                    $userFirstnameErr .= "Un prénom est requis" . ".<br>";
                    $failMessage .= $userFirstnameErr;
                } else {
                    $userFirstname = test_input($_POST["user_firstname"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$userFirstname)) {
                        $userFirstnameErr .= "Seul les lettres et les espaces sont acceptés pour le prénom" . ".<br>";
                        $failMessage .= $userFirstnameErr;
                    }
                }
                    
                if (empty($_POST["user_mail"])) {
                    $userEmailErr .= "Une adresse email est requise" . ".<br>";
                    $failMessage .= $userEmailErr;
                } else {
                    $userEmail = test_input($_POST["user_mail"]);
                    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                        $userEmailErr .= "Le format de l'email est invalide" . ".<br>";
                        $failMessage .= $userEmailErr;
                    }
                }
                    
                if (empty($_POST["user_tel"])) {
                    $userTelErr .= "Un numéro de téléphone est requis" . ".<br>";
                    $failMessage .= $userTelErr;
                } else {
                    $userTel = test_input($_POST["user_tel"]);
                    if (!preg_match("/(0)([1-9][0-9]{8})/",$userTel)) {
                        $userTelErr .= "Le format du numéro de téléphone est invalide" . ".<br>";
                        $failMessage .= $userTelErr;
                    }
                }

                if (empty($_POST["user_subject"]) || "" == $_POST["user_subject"]) {
                    $userSubjectErr .= "Un sujet est requis" . ".<br>";
                    $failMessage .= $userSubjectErr;
                } else {
                    $userSubject = test_input($_POST["user_subject"]);
                }
                
                if (empty($_POST["user_message"])) {
                    $userMessageErr .= "Un message est requis" . ".<br>";
                    $failMessage .= $userMessageErr;
                } else {
                    $userMessage = test_input($_POST["user_message"]);
                }
            }

            if ('' == $failMessage) {
                $succesMessage = "Merci {$userLastname} {$userFirstname} de nous avoir contacté à propos de “{$userSubject}”.<br>
                Un de nos conseiller vous contactera soit à l’adresse {$userEmail} ou par téléphone au {$userTel} dans les plus brefs délais pour traiter votre demande :<br>
                {$userMessage}";

                echo $succesMessage;
            } else {
                echo $failMessage;
            }
        ?>
    </body>
</html>