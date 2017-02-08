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
    <div id="bodyAccueil" class="visible">
      <p>
        <form action="choix.php" method="POST">
          <input id="pseudo" type="text" placeholder="Pseudo" />
          <a href="index.php" class="buttonJoueurAccueil" onclick="ajoutUser()" style="vertical-align:middle"><span>Jouer </span></a>
        </fom>
      </p>
    </div>
  </div>
  <script>
    function ajoutUser(){
      data = $('#pseudo').val();
      $.ajax({
        data: 'pseudo='+ data,
        type: 'get',
        url : 'php/pseudo.php',
        dataType : 'json',
        success : function(data){
          var id = data[0].joueur_id;
          var argent = data[0].joueur_argent;
          var case_courante = data[0].joueur_case_courante;
          $('#joueurs').html("Joueur "+id+" : "+argent+"€ (case courante = "+case_courante+")");
        }
      });
    }
  </script>
</body>
</html>
