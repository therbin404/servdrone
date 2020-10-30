<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_product.css">
  <title>Serv'Drone Deluxe</title>
</head>
<body>
  <?php 
    require_once('header.html');
  ?>
  <div class="jumbotron"></div>
  <section class="container">
    <div class="headerProduct">
      <div class="imageProduct">
        <img src="images/deluxe.jpeg" alt="class1">
      </div>
      <div class="generalInfos">
        <div class="mainTitleContainer">
          <div class="mainTitle">
            <h2>Deluxe</h2>
            <div class="line"></div>
          </div>
        </div>
        <div class="price"><p>499€</p></div>
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
          <li>Surveillance de votre domicile intérieur et extérieur</li>
          <li>Mise en relation avec les services de Police</li>
          <li>Neutralisation électrique des assaillants</li>
          <li>Pose des pièges de manière aléatoire</li>
          <li>Dissimulation des preuves</li>
          <li>Repassage de vos vêtements</li>
          <li>Dépoussiérage de vos meubles</li>
          <li>Navette Domicile / Pressing</li>
          <li>Nettoyage de vos animaux</li>
          <li>Pulvérisateur automatique d’huiles essentielles </li>
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
  </section>
  <?php
    require_once('footer.html');
  ?>
</body>
</html>
