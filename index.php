<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice5</title>
  </head>
  <body>
    <!--Création d'un formulaire qui redirige vers la page index.php avec la méthode GET-->
    <form action="index.php" method="get">
      <select name="civility">
        <option value="Mr">Mr</option>
        <option value="Mrs">Mme</option>
      </select>
      <p><label for="firstName">Prénom :</label><input type="text" name="firstName" id="firstName" /><br/></p>
      <p><label for="lastName">Nom :</label><input type="text" name="lastName" id="lastName" /></p>
      <input type="submit" />
    </form>
  </body>
</html>
