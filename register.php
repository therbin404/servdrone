<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_register.css">
  <title>Créer un compte</title>
</head>
<body>
  <?php 
    require_once('header.html');
  ?>
  <div class="jumbotron user_theme"></div>
  <section class="container">
  <div class="mainTitleContainer">
    <div class="mainTitle">
      <h1>Créer un compte</h1>
      <div class="line"></div>
    </div>
  </div>
  </section>
  <section>
	<form action="contact_page.php" method="POST">
  <div>
    <label for="name">Nom :</label>
		<input type="text" id="name" name="name" required>
  </div>
  <div>        
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
  </div>
  <div>
    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required>
  </div>       
  <div>
    <label for="password">Retaper le mot de passe</label>
    <input type="password" id="password" name="password" required>
  </div>
  <div>
    <input type="checkbox" id="checkbox" name="checkbox">
    <p>
      J’accepte que mes données personelles soient utilisées aux fins telles que définies dans les conditions générales d’utilisation
    </p>
  </div>
  <div>
    <input type="checkbox" id="checkbox" name="checkbox">
    <p>
      Je désire m’inscrire à la newsletter
    </p>
  </div>
	<div>
		<button type="submit" class="submit">Créer mon compte</button>
	</div>
	</form>
  </section>
  <?php
    require_once('footer.html');
  ?>
</body>
</html>
