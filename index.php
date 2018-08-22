<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>p7exo5</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label for="civility">Civilité</label>
            <select id="civility" name="civility">
                <!-- Permet de ne pas oublier de selectionner la civilité --> 
                <option selected disabled>Veuillez selectionner une option</option>
                <option value="M">M</option>
                <option value="Mme">Mme</option>
            </select>
            <label for="lastname">Nom</label><input type="text" name="lastname" placeholder="Nom" />
            <label for="firstname">Prénom</label><input type="text" name="firstname" placeholder="Prénom" />
            <input type="submit" name="submit" value="soumettre" />
        </form>
        <p>
            <?php
            //On vérifie que les valeurs existent et on affiche les valeurs
            if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
                echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
            } else {
                echo 'veuillez entrée nom et prénom';
            }
            ?>
        </p>
    </body>
</html>
