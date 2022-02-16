<?php
if (
    (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    || (!isset($_POST['textarea']) || empty($_POST['textarea']))
) {
    echo ('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Site de Recettes - Demande de contact reçue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <?php include_once('header.php'); ?>
        <h1>Message bien reçu !</h1>

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo ($_POST['email']); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo strip_tags($_POST['textarea']); ?></p>
            </div>
        </div>
    </div>
</body>

</html>