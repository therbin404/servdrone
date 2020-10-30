<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_modifying_account.css">
  <title>Modifier mon compte</title>
</head>
<body>
  <?php 
    require_once('header.html');
  ?>
  <div class="jumbotron"></div>
  <section class='container'>
    <div>
      <h1>Modifier mes informations </h1>
      <div class="line"></div>
    </div>
    <div class='champ'>
      <p>nom :</p>
      <input type="text" value='Robert' >
    </div>
    <div class='champ'>
      <p>Prenom :</p>
      <input type="text" value='Lafondue' >
    </div>
    <div class='champ'>
      <p>Mail :</p>
      <input type="text" value='fatal92@wanadoo.fr' >
    </div>
    <div class='champ'>
      <p>Téléphone :</p>
      <input type="text" value='07 81 34 82 68' >
    </div>
    <div class='champ'>
      <p>Adresse :</p>
      <input type="text" value='83 route de fatal
74 177, Hameau du chevron doré' >
    </div>
    <div class='champ'>
      <p>Nouveau mot de passe:</p>
      <input type="text" >
    </div>
    <div class='champ'>
      <p>Retaper le nouveau mot de passe:</p>
      <input type="text" >
    </div>
    <div class='champ'>
      <p>Pour valilder vos modifications, <br>
       entrez votre mot de passe actuel :</p>
      <input type="text" >
    </div>
    <div >
      <input class='button_informations' type="button" value="Modifier mes informations">
      <input class='button_delete' type="button" value="Supprimer mon compte">
    </div>
  </section>
  <?php
    require_once('footer.html');
  ?>
</body>
</html>
