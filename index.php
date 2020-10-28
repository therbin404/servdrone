<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Serv'Drone</title>
</head>
<body>
  <?php 
    require_once('header.html');
  ?>
  <div class="jumbotron"></div>
  <section class="container">
    <div class="mainTitleContainer">
      <div class="mainTitle">
        <h2>La société</h2>
        <div class="line"></div>
      </div>
    </div>
    <p>Serv’drone est une start-up française créée en 2016 par trois amis d’enfance passionnés par l’IoT (les objets connectés). 
    Leur objectif principal est d’allier technologie et service à la personne. Serv’drone commercialise des drones nouvelle génération aux fonctions révolutionnaires comme escorter vos enfants sur le chemin de l’école, promener vos animaux domestiques, récupérer vos colis à la poste, retrouver vos clés égarées. 
    </p>
    <p class="citation">“La technologie au service du quotidien.”</p>
    <div class="team">
      <div class="line"></div>
      <div>
        <div class="person">
          <img src="images/tom.png" alt="Tom">
          <p>Tom trouve une idée lumineuse en proposant à deux camarades de créer Serv’Drone.</p>
        </div>
        <div class="person">
          <img src="images/jonathan.png" alt="Jonathan">
          <p>Ne vous fiez pas à son jeune âge, Jonathan n’attend pas et se lance très tôt dans les nouvelles technologies avec Serv’Drone.</p>
        </div>
        <div class="person">
          <img src="images/arturo.png" alt="Arturo">
          <p>Arturo a décidé de rejoindre Serv’Drone pour assurer la sécurité des concitoyens.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="container medias">
    <div class="mainTitleContainer">
      <div class="mainTitle">
        <h2>Les médias en parlent</h2>
        <div class="line"></div>
      </div>
    </div>
    <p>Nous n’avons pas pu résister à partager avec vous quelques coupures de presse:</p>
    <div class="newspaper">
      <img src="images/newspaper1.png" alt="Drone pictures">
      <p><span class="title">Drone pictures</span>En 1997, moins d’un an après sa création, Serv’Drone a eu sa première mention dans un journal local.</p>
    </div>
    <div class="newspaper">
      <img src="images/newspaper2.png" alt="Vue d'en haut">
      <p><span class="title">Vue d’en haut</span>Serv’Drone est également au service de sa ville.</p>
    </div>
  </section>
  <section class="container application">
    <div class="mainTitleContainer">
      <div class="mainTitle">
        <h2>My Serv’Drone</h2>
        <div class="line"></div>
      </div>
    </div>
    <img src="" alt="My Serv'Drone">
    <p>My Serv’Drone est l’application qui vous permettra de diriger votre drone ou de lui donner des ordres où que vous soyez!</p>
    <div class="apps">
      <img src="images/getitongplay.png" alt="Telechargez-le sur Google Play">
      <img src="images/getitonappstore.png" alt="Telechargez-le sur l'App Store">
    </div>
  </section>
  <?php
    require_once('footer.html');
  ?>
</body>
</html>
