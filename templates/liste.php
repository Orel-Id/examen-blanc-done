<?php
    require_once('functions/formater.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des stagiaires</title>
</head>
<body>
   <h1>Liste des stagiaires</h1> 
   <ul>
    <?php foreach($stagiaires as $position => $stagiaire): ?>
        <li>
            <a href="detail.php?id=<?= $position ?>">
                <?= formatCompleteNom($stagiaire["nom"],$stagiaire["prenom"], $stagiaire["sexe"]) ?>
            </a>
        </li>
    <?php endforeach; ?>
   </ul>
</body>
</html>
