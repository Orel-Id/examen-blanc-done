<?php
    require_once('functions/formater.php');
    $nomAffichage = formatCompleteNom($nom, $prenom, $sexe);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information de <?= $nomAffichage ?></title>
</head>
<body>
    <h1>Information de <?= $nomAffichage ?></h1>
    <ul>
        <?php foreach($hobbiesDuStagiaire as $hobbie): ?>
            <li><small><?= $hobbie ?></small> <?= $hobbies[$hobbie] ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
