<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Jeu Monopoly</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="css/cs-select.css" />
	<link rel="stylesheet" type="text/css" href="css/cs-skin-circular.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!--<script src="jquery-3.1.1.min"></script>-->
</head>
<body>
  <!-- CONTAINER -->
  <div class="text_centrer centrer_vert">

    <!-- HEADER -->
    <div id="header">
      <img src="Image/bannier.png" id="banniere" alt="bannière" />
    </div>

    <!-- BODY (wrapper) -->
    <div id="body">



      <!-- ACCUEIL => SOLO OU MULTI -->


      <!-- ACCUEIL -->

      <div id="bodyAccueil" class="visible">
        <p>
          <input id="pseudo" type="text" placeholder="Pseudo" />
          <p id="boutonSolo" class="buttonJoueurAccueil" style="vertical-align:middle">
            <span>
              SOLO
            </span>
          </p>
          <p id="boutonMulti" class="buttonJoueurAccueil" style="vertical-align:middle"><span>MULTI </span></p>
        </p>
      </div>



      <!-- MULTI => CHOIX = CREER OU REJOINDRE   -->

      <!-- CHOIX  -->

      <div id="bodyChoix" class="hidden">
        <div id="ContTitreIndex">
          <h1 id="titreIndex">Partie Multi-joueur</h1>
          <hr />
          <br />
        </div>
        <p><a id="boutonCreer" class="button" style="vertical-align:middle"><span>Créer une partie </span></a></p>
        <p><a id="boutonRejoindre" class="button" style="vertical-align:middle"><span>Rejoindre une partie </span></a></p>
        <p><a id="boutonRetourChoix" class="buttonRetour" style="vertical-align:middle"><span>Retour </span></a></p>
      </div>


      <!-- SOLO => CHOIX NB IA -->
      <div id="bodySolo" class="hidden">
        <div id="ContTitreIndex">
          <h1 id="titreIndex">Partie solo</h1>
          <hr />
          <br />
        </div>
        <div id="chxIA">
          <p>Nombre d'IA</p>
          <div id="select">
            <select id="select1" class="cs-select cs-skin-circular">
              <option value="" disabled selected>Select an activity</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
        </div>
        <br />
        <p><a href="tableau.php" class="button2" style="vertical-align:middle"><span>Valider </span></a></p>
        <p><a id="boutonRetourSolo" class="buttonRetour" style="vertical-align:middle"><span>Retour </span></a></p>
      </div>


      <!-- MULTI => CREATION -->

      <!-- CREATION -->

      <div id="bodyCreer" class="hidden">
        <div id="ContTitreIndex">
          <h1 id="titreIndex">Partie Multi-joueur</h1>
          <hr />
          <br />
        </div>
        <p><input type="text" id="partie_nom" placeholder="Nom de la partie" /></p>
        <br />
        <div id="chxNbJoueur">
          <p>Nombre de joueurs</p>
          <div id="select">
            <select id="select2" class="cs-select cs-skin-circular">
              <option value="" disabled selected>Select an activity</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
  			  </div>
        </div>
        <br />
        <p><a id="boutonValiderCreer" class="button2" style="vertical-align:middle"><span>Valider </span></a></p>
        <p><a id="boutonRetourCreationMulti" class="buttonRetour" style="vertical-align:middle"><span>Retour </span></a></p>
      </div>

      <!-- MULTI => REJOINDRE -->

      <!-- REJOINDRE -->

      <div id="bodyRejoindre" class="hidden">
        <div id="ContTitreIndex">
          <h1 id="titreIndex">Partie Multi-joueur</h1>
          <hr />
          <br />
        </div>
        <p>Liste des parties en cours :</p>
        <div id="listePartie">
        </div>
        <p><a id="boutonRetourRejoindre" class="buttonRetour" style="vertical-align:middle"><span>Retour </span></a></p>
      </div>



      <!-- MULTI => ATTENTE -->
      <div id="bodyAttente" class="hidden">
        <div id="ContTitreIndex">
          <h1 id="titreIndex">Partie Multi-joueur</h1>
          <hr />
          <br />
        </div>
        <p id="nomPartie">partie1</p>
        <p id="nbJ">Nombre de joueurs : 3/4</p>
        <center>
          <table id="tableauAttente">
            <tr>
              <td id="pseudo1"></td><td id="boutonPret1"></td><td id="imgCheck1"></td>
            </tr>
            <tr>
              <td id="pseudo2"></td><td id="boutonPret2">
                <img src="Image/loader.gif" class="load" alt="attente"/>
              </td><td id="imgCheck2"></td>
            </tr>
            <tr>
              <td id="pseudo3"></td><td id="boutonPret3">
                <img src="Image/loader.gif" class="load" alt="attente"/>
              </td><td id="imgCheck3"></td>
            </tr>
            <tr>
              <td id="pseudo4"></td><td id="boutonPret4">
                <img src="Image/loader.gif" class="load" alt="attente"/>
              </td><td id="imgCheck4"></td>
            </tr>
          </table>
        </center>
      </div>

      <!-- ATTENTE -->


    </div>
  </div>
  <script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
  <script src="js/NbJoueurs.js"></script>
  <script>
  //Bouton retour de la création de partie solo
    $(document).on('click', '#boutonRetourSolo', function(){
      $('#bodyAccueil').addClass('visible');
      $('#bodyAccueil').removeClass('hidden');
      $('#bodySolo').addClass('hidden');
      $('#bodySolo').removeClass('visible');
    });
    //Bouton retour de la page de choix multijoueur
    $(document).on('click', '#boutonRetourChoix', function(){
      $('#bodyAccueil').addClass('visible');
      $('#bodyAccueil').removeClass('hidden');
      $('#bodyChoix').addClass('hidden');
      $('#bodyChoix').removeClass('visible');
    });
    //Bouton retour de la page de création de partie multijoueur
    $(document).on('click', '#boutonRetourCreationMulti', function(){
      $('#bodyChoix').addClass('visible');
      $('#bodyChoix').removeClass('hidden');
      $('#bodyCreer').addClass('hidden');
      $('#bodyCreer').removeClass('visible');
    });
    //Bouton retour de la page pour rejoindre une partie multijoueur
    $(document).on('click', '#boutonRetourRejoindre', function(){
      $('#bodyChoix').addClass('visible');
      $('#bodyChoix').removeClass('hidden');
      $('#bodyRejoindre').addClass('hidden');
      $('#bodyRejoindre').removeClass('visible');
    });
    //Bouton Solo de la page d'accueil
    $(document).on('click', '#boutonSolo', function(){
      $('#bodyAccueil').addClass('hidden');
      $('#bodyAccueil').removeClass('visible');
      $('#bodySolo').addClass('visible');
      $('#bodySolo').removeClass('hidden');
    });
    //Bouton multi de la page d'accueil
    $(document).on('click', '#boutonMulti', function(){
      $('#bodyAccueil').addClass('hidden');
      $('#bodyAccueil').removeClass('visible');
      $('#bodyChoix').addClass('visible');
      $('#bodyChoix').removeClass('hidden');
    });
    //Bouton créer une partie multijoueur
    $(document).on('click', '#boutonCreer', function(){
      $('#bodyChoix').addClass('hidden');
      $('#bodyChoix').removeClass('visible');
      $('#bodyCreer').addClass('visible');
      $('#bodyCreer').removeClass('hidden');
    });
    //Bouton rejoindre une partie multijoueur
    $(document).on('click', '#boutonRejoindre', function(){
      $('#bodyChoix').addClass('hidden');
      $('#bodyChoix').removeClass('visible');
      $('#bodyRejoindre').addClass('visible');
      $('#bodyRejoindre').removeClass('hidden');
    });
    //Bouton validation de la création de la partie multijoueur
    $(document).on('click', '#boutonValiderCreer', function(){
      creerPartie();
      $('#bodyCreer').addClass('hidden');
      $('#bodyCreer').removeClass('visible');
      $('#bodyAttente').addClass('visible');
      $('#bodyAttente').removeClass('hidden');
      ajoutJoueurcourant();
    });
    $(function(){
      $.ajax({
        url : 'php/listePartie.php?ope=liste',
        dataType : 'json',
        success : function(data){
          var p = '';
          for (part in data) {
            var id = data[part].partie_id;
            var nom = data[part].partie_nom;
            var nbJT = data[part].partie_nbJoueur;
            var chef = data[part].user_pseudo;
            var plein = data[part].partie_plein;
            var nbJA = 1;
            if (plein == 0){
              var img = '<img src="Image/vert.png" alt="encore de la place"/>';
            } else {
              var img = '<img src="Image/rouge.png" alt="plus de place"/>';
            }
            p = p + '<p><span>Partie <span id="partie' + id + '">' + id + '</span> :</span> <span>' + nom + '</span> <span>' + chef +
              '</span> <span><span>' + nbJA + '</span>/' + nbJT + '</span> <span>' + img +
              '</span><a id="btn' + id + '" class="buttonRejoindre" style="vertical-align:middle" ><span>Rejoindre </span></a></p>';
          }
          $('#listePartie').html(p);
        }
      });
    });
    function creerPartie(){
      var nom = $('#partie_nom').val();
      var chef = $('#pseudo').val();
      var nbJ = $('#select2').val();
      $.ajax({
        data : 'nom=' + nom + '&nbJ=' + nbJ + '&pseudo=' + chef,
        url : 'php/listePartie.php?ope=ajout',
        dataType : 'json',
      });
    }
    function rejoindrePartie(){
      // console.log(this);
      var id = $(this).attr("id").split("btn");
      // console.log(id);
      var partie = id[1];
      var joueur = $('#pseudo').val();

      $.ajax({
        data : 'partie=' + partie + '&joueur=' + joueur,
        url : 'php/listePartie.php?ope=rejoindre',
        dataType : 'json'

      });

      $('#bodyRejoindre').addClass('hidden');
      $('#bodyRejoindre').removeClass('visible');
      $('#bodyAttente').addClass('visible');
      $('#bodyAttente').removeClass('hidden');
    }

    $(document).on("click", ".buttonRejoindre", rejoindrePartie);

    function ajoutJoueurcourant(){
      var joueur = $('#pseudo').val();
      $('#pseudo1').html('<p>' + joueur + '</p>');
      $.ajax({
        data : 'partie=' + partie + '&joueur=' + joueur,
        url : 'php/listePartie.php?ope=rejoindre',
        dataType : 'json',
      });
    }

  </script>
</body>
</html>