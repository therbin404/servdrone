<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_contact.css">
  <title>Nous contacter</title>
</head>
<body>
  <?php 
    require_once('header.html');
  ?>
  <div class="jumbotron"></div>
  <section class="container">
  <div class="mainTitleContainer">
    <div class="mainTitle">
      <h2>Contact</h2>
      <div class="line"></div>
    </div>
  </div>
    <p>Pour toute question, remarque, demande, n’hésitez pas à prendre contact avec notre service clientèle</p>
    <div class="contactMethods">
      <div>
        <p>Par téléphone, au<br>
          <span class="importantText">XX.XX.XX.XX.XX</span></p>
      </div>
      <div>
        <p>Par mail, à l’adresse suivante:<br>
          <span class="importantText">XXXXX@XXXX.XX</span></p>
      </div>
      <div>
        <p>Ou directement via notre<br>
          <span class="importantText">formulaire de contact</span></p>
      </div>
      <div class='textUser'>
      <input class="searchBar" type="text" id="nom" value="Nom">
      <input class="searchBar" type="text" id="telephone" value="Téléphone">
      <input class="searchBarEmail" type="text" id="email" value="Adresse email">
      <input class="searchBarRequest" type="textarea" id="demande" value="Ma demande...">
    </div>
    </div>
    <input class="button" type="submit" value="Envoyer">
  </section>
  <?php
    require_once('footer.html');
  ?>
</body>
</html>
