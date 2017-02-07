<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Jeu Monopoly</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  <div class="text_centrer centrer_vert">
    <div id="header">
      <img src="Image/bannier.png" id="banniere" alt="bannière" />
    </div>
    <div id="body">
      <form action="tableau.php" method="post">
        <label for="nbJ">Nombre de joueurs : <input type="text" id="nbJ" name="nbJ" />
        <input type="button" value="Jouer" />
      </form>
    </div>
  </div>
</body>
</html>
