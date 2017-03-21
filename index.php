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
        <p><a id="boutonValiderSolo" class="button2" style="vertical-align:middle"><span>Valider </span></a></p>
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
        <p id="nbJ">Nombre de joueurs : <span id="nombreDeJoueur">1</span>/<span id="nombreDeJoueurMax">1</span></p>
        <center>
          <table id="tableauAttente">
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
      if( $('#pseudo').val() != ""){
        $('#bodyAccueil').addClass('hidden');
        $('#bodyAccueil').removeClass('visible');
        $('#bodySolo').addClass('visible');
        $('#bodySolo').removeClass('hidden');
      } else {
        $('#pseudo').css("border-color","#ff4141");
        setTimeout(function(){ $('#pseudo').css("border-color","#cccccc"); }, 1000);
      }
    });
    //Bouton multi de la page d'accueil
    $(document).on('click', '#boutonMulti', function(){
      if( $('#pseudo').val() != ""){
        $('#bodyAccueil').addClass('hidden');
        $('#bodyAccueil').removeClass('visible');
        $('#bodyChoix').addClass('visible');
        $('#bodyChoix').removeClass('hidden');
      } else {
        $('#pseudo').css("border-color","#ff4141");
        setTimeout(function(){ $('#pseudo').css("border-color","#cccccc"); }, 1000);
      }
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
    function rejPartie(id){
      $('#bodyRejoindre').addClass('hidden');
      $('#bodyRejoindre').removeClass('visible');
      $('#bodyAttente').addClass('visible');
      $('#bodyAttente').removeClass('hidden');
      rejoindrePartie(id);
    }
    //Bouton validation de la création de la partie multijoueur
    $(document).on('click', '#boutonValiderCreer', function(){
      if($('#partie_nom').val() != "" && $('#select2').val() != null){
        creerPartie();
        $('#bodyCreer').addClass('hidden');
        $('#bodyCreer').removeClass('visible');
        $('#bodyAttente').addClass('visible');
        $('#bodyAttente').removeClass('hidden');
      } else if($('#partie_nom').val() == "" && $('#select2').val() == null){
        $('#partie_nom').css("border-color","#ff4141");
        setTimeout(function(){ $('#partie_nom').css("border-color","#cccccc"); }, 1000);
        $('#chxNbJoueur').css("border-color","#ff4141");
        setTimeout(function(){ $('#chxNbJoueur').css("border-color","#cccccc"); }, 1000);
      } else if($('#partie_nom').val() == ""){
        $('#partie_nom').css("border-color","#ff4141");
        setTimeout(function(){ $('#partie_nom').css("border-color","#cccccc"); }, 1000);
      } else if($('#select2').val() == null){
        $('#chxNbJoueur').css("border-color","#ff4141");
        setTimeout(function(){ $('#chxNbJoueur').css("border-color","#cccccc"); }, 1000);
      }
    });
    //Bouton validation de la création de la partie solo
    $(document).on('click', '#boutonValiderSolo', function(){
      if($('#partie_nom').val() != "" && $('#select2').val() != null){
        $('#boutonValiderSolo').attr('href',"tableau.php");
        $('#bodyCreer').addClass('hidden');
        $('#bodyCreer').removeClass('visible');
        $('#bodyAttente').addClass('visible');
        $('#bodyAttente').removeClass('hidden');
      } else if($('#partie_nom').val() == "" && $('#select').val() == null){
        $('#partie_nom').css("border-color","#ff4141");
        setTimeout(function(){ $('#partie_nom').css("border-color","#cccccc"); }, 1000);
        $('#chxIA').css("border-color","#ff4141");
        setTimeout(function(){ $('#chxNbJoueur').css("border-color","#cccccc"); }, 1000);
      } else if($('#partie_nom').val() == ""){
        $('#partie_nom').css("border-color","#ff4141");
        setTimeout(function(){ $('#partie_nom').css("border-color","#cccccc"); }, 1000);
      } else if($('#select').val() == null){
        $('#chxIA').css("border-color","#ff4141");
        setTimeout(function(){ $('#chxNbJoueur').css("border-color","#cccccc"); }, 1000);
      }
    });

    var partie_id;
    var nbJTotal = 90;
    var nbJActuel;

    setInterval(
      function(){
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
              var nbJA = data[part].nbJ;
              nbJActuel = nbJA;
              if (nbJA < nbJT){
                var img = '<img src="Image/vert.png" alt="encore de la place"/>';
                var boutonRej = '<a id="btn' + id + '" class="buttonRejoindre" style="vertical-align:middle" >' +
                  '<span onclick="rejPartie(' + id + ')">Rejoindre </span>' +
                '</a>';
              } else {
                var img = '<img src="Image/rouge.png" alt="plus de place"/>';
                var boutonRej = '<a id="btn' + id + '" class="buttonRejoindre" style="vertical-align:middle" >' +
                  '<span>Rejoindre</span>' +
                '</a>';
              }
              p = p + '<p class="listeParties" id="' + id + '">' +
                        '<span>' +
                          'Partie <span id="partie' + id + '">' + id + '</span> :' +
                        '</span> ' +
                        '<span>' + nom + '</span> ' +
                        '<span>' + chef + '</span> ' +
                        '<span>' +
                          '<span id="nbJA' + id + '">' + nbJA + '</span>/' + nbJT +
                        '</span> ' +
                        '<span>' + img + '</span>' +
                        boutonRej +
                      '</p>';
            }
            $('#listePartie').html(p);
          }
        })
      }, 500
    );

    function recupNbJoueurTotal(idp){
      $.ajax({
        async : false,
        data : 'partie=' + idp,
        url : 'php/listePartie.php?ope=listeNbJ',
        dataType : 'json',
        success : function(data){
          var id = data[0].partie_id;
          partie_id = id;
          var nbJT = data[0].nb_joueur;
          nbJTotal = nbJT;
        },
      });
    }

    function debloqueBoutonPret(idpart){
      $.ajax({
        async : false,
        data : 'partie=' + idpart,
        url : 'php/listePartie.php?ope=newGame',
        dataType : 'json',
        success : function(data){

        }
      });
    }

    function creerPartie(){
      var nom = $('#partie_nom').val();
      var chef = $('#pseudo').val();
      var nbJ = $('#select2').val();
      $.ajax({
        data : 'nom=' + nom + '&nbJ=' + nbJ + '&pseudo=' + chef,
        url : 'php/listePartie.php?ope=ajout',
        dataType : 'json',
        success : function(data){
          partie_id = data['partie_id'];
          recupNbJoueurTotal(partie_id);
          listerJoueurs();
          afficheJoueurChef(data['partie_id']);
        }
      });
    }

    function listerJoueurs(){

      var p = '';
      p = '<tr>' +
        '<td id="pseudo1"></td>' +
        '<td id="boutonPret1"><a class="buttonPret button" style="vertical-align:middle" >Prêt</a></td>' +
        '<td id="imgCheck1"></td>' +
      '</tr>';
      if (nbJTotal >= 2){
        p = p + '<tr>' +
          '<td id="pseudo2" class="listePseudo"><img src="Image/loader.gif" class="load" alt="attente"/></td>' +
          '<td id="boutonPret2" class="btnpret"></td>' +
          '<td id="imgCheck2"></td>' +
        '</tr>';
      }
      if (nbJTotal >= 3){
        p = p + '<tr>' +
          '<td id="pseudo3" class="listePseudo"><img src="Image/loader.gif" class="load" alt="attente"/></td>' +
          '<td id="boutonPret3" class="btnpret"></td>' +
          '<td id="imgCheck3"></td>' +
        '</tr>';
      }
      if (nbJTotal == 4){
        p = p + '<tr>' +
          '<td id="pseudo4" class="listePseudo"><img src="Image/loader.gif" class="load" alt="attente"/></td>' +
          '<td id="boutonPret4" class="btnpret"></td>' +
        '</tr>';
      }
      $('#tableauAttente').html(p);
    }

    function rejoindrePartie(id){
      var joueur = $('#pseudo').val();
      $.ajax({
        data : 'partie=' + id + '&joueur=' + joueur,
        url : 'php/listePartie.php?ope=rejoindre',
        dataType : 'json'
      });
      recupNbJoueurTotal(id);
      listerJoueurs();
      afficheJoueurChef(id);
      partie_id = id;
    }

    function afficheJoueurChef(partie){
      $.ajax({
        data : 'partie=' + partie,
        url : 'php/listePartie.php?ope=getChefPartie',
        dataType : 'json',
        success : function(data){
          $('#pseudo1').html('<p>' + data['user_pseudo'] + '</p>');
        }
      });
    }

    function afficheJoueurParticipants(partie){
        $.ajax({
          data : 'partie=' + partie,
          url : 'php/listePartie.php?ope=getParticipantPartie',
          dataType : 'json',
          success : function(data){
            if (nbJTotal == nbJActuel){
              var img = '<a href="/tableau.php" class="buttonPret button" style="vertical-align:middle"><span onclick="pretAJouer(' + partie_id + ')">Prêt</span></a>';
              $('#boutonPret1').html('<a class="buttonPret button" style="vertical-align:middle" ><span onclick="pretAJouer(' + partie_id + ')">Prêt</span></a>');
            } else {
              var img = '<a href="/tableau.php" class="buttonPret button" style="vertical-align:middle" >Prêt</a>';
            }
            var i = 0;
            for(part in data){
              $('.listePseudo:eq(' + i + ')').html('<p>' + data[part].user_pseudo + '</p>');
              $('.btnpret:eq(' + i + ')').html(img);
              $('a').attr('href', 'tableau.php?partieId=' + partie_id + '&numJoueur=1'); // Changer le a par la vrai valeur
              i++;
            }
          }
        });
    }

    function afficheNombreJoueurParticipants(partie){
      $.ajax({
        data : 'id=' + partie,
        url : 'php/listePartie.php?ope=incNbJ',
        dataType : 'json',
        success : function(data){
          $('#nombreDeJoueur').text(data[0].nb_joueur);
          $('#nombreDeJoueurMax').text(nbJTotal);
        }
      });
    }

    function pretAJouer(id){
      $.ajax({
        data : 'id=' + id,
        url : 'php/listePartie.php?ope=pretAJouer',
        dataType : 'json',
        success : function(data){
          $('#nombreDeJoueur').text(data[0].nb_joueur);
          $('#nombreDeJoueurMax').text(nbJTotal);
        }
      });
    }

    setInterval(function(){
      if(partie_id != undefined){
        afficheJoueurParticipants(partie_id);
        afficheNombreJoueurParticipants(partie_id);
      }
    }, 500);
  </script>
</body>
</html>
