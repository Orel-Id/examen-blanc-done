<?php
    require_once('functions/formater.php');
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
    <h1>Mise à jour</h1>
    <form action="validate_update.php" method="POST">
        <input type="hidden" name="position" value="<?= $position ?>" />
        <label>
            Nom
            <input type="text" name="nom" value="<?= $nom ?>" />
            <?php if(isset($error_nom)): ?>
                <p><?= $error_nom ?></p>
            <?php endif; ?>
        </label>
        <br/>
        <label>
            Prenom
            <input type="text" name="prenom" value="<?= $prenom ?>" />
            <?php if(isset($error_prenom)): ?>
                <p><?= $error_prenom ?></p>
            <?php endif; ?>
        </label>
        <br/>
        <label>
            Date de naissance
            <input type="number" name="jour" maxlength="2" max="31" value="<?= $ddn[0] ?>" />
            <select name="mois">
                <?php foreach(range(1, 12) as $monthNumber): ?>
                    <option value="<?= $monthNumber ?>"  <?= (int)$ddn[1] === (int)$monthNumber ? 'selected="selected"' : '' ?> ><?= $monthNumber ?></option>
                <?php endforeach; ?>
            </select>
            <input type="number" name="annee" maxlength="4" value="<?= $ddn[2] ?>" />
            <?php if(isset($error_ddn)): ?>
                <p><?= $error_ddn ?></p>
            <?php endif; ?>
        </label>
        <br/>
        <label>
            Sexe
            <input type="radio" name="sexe" id="F" value="F" <?= $sexe === 'F' ? 'checked="checked"' : '' ?> />
            <input type="radio" name="sexe" id="M" value="M"  <?= $sexe === 'M' ? 'checked="checked"' : '' ?> />
            <?php if(isset($error_sexe)): ?>
                <p><?= $error_sexe ?></p>
            <?php endif; ?>
        </label>
        <br/>
        <ul>
            <?php foreach($hobbies as $hobbie => $hobbieName): ?>
                <?php
                    $checked = (in_array($hobbie, $hobbiesDuStagiaire))? "checked" : "";
                ?>
                <li>
                    <label for="H_<?= $hobbie ?>"><?= $hobbieName ?> : </label>
                    <input type="checkbox" name="hobbies[]" id="H_<?= $hobbie ?>" value="<?= $hobbie ?>" <?= $checked ?> />
                </li>
            <?php endforeach; ?>
        </ul>
        <br/>
        <input type="submit" value="Sauver" />
    </form>
</body>
</html>
