<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_product.css">
  <title>Serv'Drone Class 1</title>
</head>
<body>
  <?php 
    require_once('header.html');
  ?>
  <div class="jumbotron"></div>
  <section class="container">
    <div class="headerProduct">
      <div class="imageProduct">
        <img src="images/class1.jpeg" alt="class1">
      </div>
      <div class="generalInfos">
        <div class="mainTitleContainer">
          <div class="mainTitle">
            <h2>Class 1</h2>
            <div class="line"></div>
          </div>
        </div>
        <div class="price"><p>399€</p></div>
        <div class="quantity">
          <p>Quantité</p>
          <input type="text">
        </div>
        <div class="buttonMore">
          <p>Ajouter au panier</p>
        </div>
      </div>
    </div>
    <div class="technicalInformations">
      <div>
        <p>Les services</p>
        <ul>
          <li>Détecteur de mouvement</li>
          <li>Caméra de surveillance</li>
          <li>Assistance dans le stationnement de votre véhicule</li>
          <li>Escorter vos enfants sur le chemin de l’école</li>
          <li>Promener vos animaux domestiques</li>
          <li>Récupérer vos colis à la poste</li>
          <li>Retrouver vos clés égarées</li>
          <li>Raconte des histoires à vos enfants</li>
          <li>Vous assiste dans la préparation des repas</li>
          <li>Visiophonie</li>
        </ul>
      </div>
      <div></div>
    </div>
  <!-- ADD CONTENT HERE -->
  </section>
  <?php
    require_once('footer.html');
  ?>
</body>
</html>
