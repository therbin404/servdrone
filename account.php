<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_account.css">
  <title>Mon compte</title>
</head>
<body>
  <?php 
    require_once('header.html');
  ?>
  
<section class='container'>
 
<div class="mainTitleContainer">
    <div class="mainTitle">
      <h2>Mon compte</h2>
      <div class="line"></div>
    </div>
  </div>
<div class='button'>
  <input class='commandes' type="button" value="Mes commandes">
</div>
  <div class='values'>
    <div class='value'>
      <p>Nom :</p>
      <p>Prenom :</p>
      <p>Mail :</p>
      <p>Téléphone :</p>
      <p>Adresse : </p>
    </div>
    <div>
      <p>Robert</p>
      <p>Lafondue</p>
      <p>fatal92@wanadoo.fr</p>
      <p>07 81 34 82 68</p>
      <p>83 route de fatal <br>
         74 177, Hameau du chevron doré</p>
    </div>
  </div>
  <div class="button">
 <a href="modifying_account.php"><input class='informations' type="button" value="Modifier mes informations"></a>
</div>
</section>

  <?php
    require_once('footer.html');
  ?>
</body>
</html>
