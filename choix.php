<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Jeu Monopoly</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="css/cs-select.css" />
	<link rel="stylesheet" type="text/css" href="css/cs-skin-circular.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  <div class="text_centrer centrer_vert">
    <div id="header">
      <img src="Image/bannier.png" id="banniere" alt="bannière" />
    </div>

<?php
if (!isset($_GET['ch'])) {
?>

    <div id="bodyChoix">
      <p><a href="choix.php?ch=1" class="button" style="vertical-align:middle"><span>Créer une partie </span></a></p>
      <p><a href="choix.php?ch=2" class="button" style="vertical-align:middle"><span>Rejoindre une partie </span></a></p>
    </div>

<?php
} else {
  if ($_GET['ch'] == 1) {
?>

    <div id="body2">
      <p><input type="text" placeholder="Nom de la partie" /></p>
      <br />
      <div id="chxNbJoueur">
        <p>Nombre de joueurs</p>
        <div id="select">
      	  <select class="cs-select cs-skin-circular">
					  <option value="" disabled selected>Select an activity</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
				    <option value="4">4</option>
				  </select>
			  </div>
      </div>
      <br />
      <p><a href="choix.php?ch=1" class="button2" style="vertical-align:middle"><span>Valider </span></a></p>
    </div>

<?php
  } else {
?>

    <div id="body3">
      <p>Liste des parties en cours :</p>
    </div>

<?php
  }
}
?>

  </div>
  <script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
  <script src="js/NbJoueurs.js"></script>
</body>
</html>
