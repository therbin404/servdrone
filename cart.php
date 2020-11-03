<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_cart.css">
  <title>Mon panier</title>
</head>
<body>
  <?php 
    require_once('header.html');
  ?>
  <div class="jumbotron"></div>
  <section class="container cart">
    <div class="mainTitleContainer">
      <div class="mainTitle">
        <h2>Mon panier</h2>
        <div class="line"></div>
      </div>
    </div>
    <div>
      <div class="headArticle firstLine">
        <p>Article</p>
      </div>
      <div>
        <p>Serv’Drone Deluxe</p>
      </div>
    </div>
    <div>
      <div class="headArticle firstLine">
        <p>Description</p>
      </div>
      <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec mi.</p>
      </div>
    </div>
    <div class="lineCart firstLine">
      <div class="unitPrice">
        <p>Prix unitaire</p>
      </div>
      <div class="quantity">
        <p>Quantité</p>
      </div>
      <div class="price">
        <p>Prix</p>
      </div>
    </div>
    <div class="lineCart">
      <div class="unitPrice">
        <p>499,00 €</p>
      </div>
      <div class="quantity">
        <div class="quantityButton">
          <p>1</p>
        </div>
      </div>
      <div class="price">
        <p>499,00 €</p>
      </div>
    </div>
    <hr>
    <div class="lineCart">
      <div class="unitPrice"> </div>
      <div class="quantity firstLine">Sous-total : </div>
      <div class="price">
        <p>499,00 €</p>
      </div>
    </div>
    <div class="submit">
      <a href="checkout.html" title="Passer au paiement">
        <input class="submitOrder" type="submit" value="Passer la commande">
      </a>
    </div>
  </section>
  <?php
    require_once('footer.html');
  ?>
</body>
</html>
