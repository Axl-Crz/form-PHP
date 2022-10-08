<?php
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$mail = $_POST['mail'];
$topic = $_POST['topic'];
$phone = $_POST['phone'];
$message = $_POST["message"];


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thank you !</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        
        <p>Merci <?= "$firstName $lastName "; ?>de nous avoir contacté à propos de "<?= $topic; ?>". </p>
        <p>Un de nos conseiller vous contactera à l’adresse <?= $mail; ?> ou par téléphone au <?= $phone; ?> dans les plus brefs délais pour traiter votre demande : </p>
        <p class=message><?= $message; ?></p>
    </div>
    </head>

</body>

</html>