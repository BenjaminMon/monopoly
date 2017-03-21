<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Jeu Monopoly</title>
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  <div id="stat">
    <p>C'est au tour du joueur 1</p>
    <p>Argent des joueurs :
    </br>
    Joueur 1 : 1500 €
    </br>
    Joueur 2 : 1500 €
    </br>
    Joueur 3 : 1500 €
    </br>
    Joueur 4 : 1500 €</p>
  </div>
  <center>
    <table>
      <!-- PREMIERE LIGNE -->
      <tr class="Lhaut">
        <!-- CASE 1 -->
        <td  id="0" colspan="2" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('depart')">
          <img src="Image/joueur1.png" id="joueur1" class="joueur1 absolute joueur_courant" alt="J1" />
          <img src="Image/joueur2.png" id="joueur2" class="joueur2 absolute" alt="J2" />
          <img src="Image/joueur3.png" id="joueur3" class="joueur3 absolute" alt="J3" />
          <img src="Image/joueur4.png" id="joueur4" class="joueur4 absolute" alt="J4" />
          <div class="relative">
            <p class="relative caseNormal">Départ &rarr;</p>
          </div>
        </td>

        <!-- CASE 2 -->
        <td id="1" class="text_centrer relative" onclick="afficherPropriete('1.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">BOULEVARD DE BELLEVILLE</p><p></p><p id="prix1" class="rien">60 €</p>
        </td>

        <!-- CASE 3 -->
        <td id="2" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">CAISSE DE COMMUNAUTE</p><img src="Image/coffre de communauté.png" class="caseTrain" alt="train" />
        </td>

        <!-- CASE 4 -->
        <td id="3" class="text_centrer relative" onclick="afficherPropriete('1.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE LECOURBE</p><p></p><p id="prix3" class="rien">60 €</p>
        </td>

        <!-- CASE 5 -->
        <td id="4" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">IMPOTS SUR LE REVENU</p><p></p><p id="prix4" class="rien">200 €</p>
        </td>

        <!-- CASE 6 -->
        <td id="5" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('gare1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">GARE MONTPARNASSE</p><img src="Image/train.png" class="caseTrain" alt="train" /><p id="prix5" class="rien">200 €</p>
        </td>

        <!-- CASE 7 -->
        <td id="6" class="text_centrer relative" onclick="afficherPropriete('2.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
            <p class="rien">RUE DE VAUGIRARD</p><p></p><p id="prix6" class="rien">100 €</p>
        </td>

        <!-- CASE 8 -->
        <td id="7" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">CHANCE</p><img src="Image/Chance 2.gif" class="caseTrain" alt="train"/>
        </td>

        <!-- CASE 9 -->
        <td id="8" class="text_centrer relative" onclick="afficherPropriete('2.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE DE COURCELLES</p><p></p><p id="prix8" class="rien">100 €</p>
        </td>

        <!-- CASE 10 -->
        <td id="9" class="text_centrer relative" onclick="afficherPropriete('2.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE DE LA REPUBLIQUE</p><p></p><p id="prix9" class="rien">120 €</p>
        </td>

        <!-- CASE 11 -->
        <td id="10" colspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          Visite seulement
        </td>
      </tr>
      <!-- TOUJOURS PREMIERE LIGNE POUR LES COULEURS DES EMPLACEMENTS -->
      <tr class="Lhaut">
        <!-- CASE 2 -->
        <td class="maison1"></td>
        <!-- CASE 4 -->
        <td class="maison1"></td>
        <!-- CASE 7 -->
        <td class="maison2"></td>
        <!-- CASE 9 -->
        <td class="maison2"></td>
        <!-- CASE 10 -->
        <td class="maison2"></td>
        <!-- CASE 11 -->
        <td colspan="2" class="text_centrer" id="case_prison">
          Prison
        </td>
      </tr>
      <!-- PREMIERE ET DEUXIEME COLONNE -->
      <tr>
        <!-- CASE 2 DE LA LIGNE DE GAUCHE -->
        <td id="39" class="text_centrer relative" onclick="afficherPropriete('8.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE DE LA PAIX</p><p></p><p id="prix39" class="rien">400 €</p>
        </td>
        <td class="maison8"></td>
        <!-- CASE CENTRALE -->
        <td id="titre_centre" colspan="9" rowspan="9">
          <h1>MONOPOLY</h1>
        </td>
        <!-- CASE 2 DE LA LIGNE DE DROITE -->
        <td class="maison3"></td>
        <td id="11" class="text_centrer relative" onclick="afficherPropriete('3.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p  class="rien">BOULEVARD DE LA VILLETTE</p><p></p><p id="prix11" class="rien">140 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 3 DE LA LIGNE DE GAUCHE -->
        <td id="38" colspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">TAXE DE LUXE</p><img src="Image/Taxe.gif" class="caseTrain" alt="train" /><p id="prix38" class="rien">100 €</p>
        </td>
        <!-- CASE 3 DE LA LIGNE DE DROITE -->
        <td id="12" colspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">COMPAGNIE DE DISTRUBUTION D'ELECTRICITE</p><img src="Image/electricite.png" class="caseTrain" alt="train" />
          <p id="prix12" class="rien">150 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 4 DE LA LIGNE DE GAUCHE -->
        <td id="37" class="text_centrer relative" onclick="afficherPropriete('8.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE DES CHAMPS-ELYSEES</p><p></p><p id="prix37" class="rien">350 €</p>
        </td>
        <td class="maison8"></td>
        <!-- CASE 4 DE LA LIGNE DE DROITE -->
        <td class="maison3"></td>
        <td id="13" class="text_centrer relative" onclick="afficherPropriete('3.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE DE NEUILLY</p><p></p><p id="prix13" class="rien">140 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 5 DE LA LIGNE DE GAUCHE -->
        <td id="36" colspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">CHANCE</p><img src="Image/Chance 3.gif" class="caseTrain" alt="train" />
        </td>
        <td class="maison3"></td>
        <!-- CASE 5 DE LA LIGNE DE DROITE -->
        <td id="14" class="text_centrer relative" onclick="afficherPropriete('3.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE DE PARADIS</p><p></p><p id="prix14" class="rien">160 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 6 DE LA LIGNE DE GAUCHE -->
        <td id="35" colspan="2" class="text_centrer relative" onclick="afficherPropriete('gare4')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">GARE SAINT-LAZARE</p><img src="Image/train.png" class="caseTrain" alt="train" /><p id="prix35" class="rien">200 €</p>
        </td>
        <!-- CASE 6 DE LA LIGNE DE DROITE -->
        <td id="15" colspan="2" class="text_centrer relative" onclick="afficherPropriete('gare2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">GARE DE LYON</p><img src="Image/train.png" class="caseTrain" alt="train" /><p id="prix15" class="rien">200 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 7 DE LA LIGNE DE GAUCHE -->
        <td id="34" class="text_centrer relative" onclick="afficherPropriete('7.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">BOULEVARD DES CAPUCINES</p><p></p><p id="prix34" class="rien">320 €</p>
        </td>
        <td class="maison7"></td>
        <!-- CASE 7 DE LA LIGNE DE DROITE -->
        <td class="maison4"></td>
        <td id="16" class="text_centrer relative" onclick="afficherPropriete('4.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE MOZART</p><p></p><p id="prix16" class="rien">180 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 8 DE LA LIGNE DE GAUCHE -->
        <td id="33" colspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">CAISSE DE COMMUNAUTE</p><img src="Image/coffre de communauté.png" class="caseTrain" alt="train" />
        </td>
        <!-- CASE 8 DE LA LIGNE DE DROITE -->
        <td id="17" colspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!--<img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">CAISSE DE COMMUNAUTE</p><img src="Image/coffre de communauté.png" class="caseTrain" alt="train" />
        </td>
      </tr>

      <tr>
        <!-- CASE 9 DE LA LIGNE DE GAUCHE -->
        <td id="32" class=" text_centrer relative" onclick="afficherPropriete('7.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE FOCH</p><p></p><p id="prix32" class="rien">300 €</p>
        </td>
        <td class="maison7"></td>
        <!-- CASE 9 DE LA LIGNE DE DROITE -->
        <td class="maison4"></td>
        <td id="18" class="text_centrer relative" onclick="afficherPropriete('4.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">BOULEVARD SAINT-MICHEL</p><p></p><p id="prix18" class="rien">180 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 10 DE LA LIGNE DE GAUCHE -->
        <td id="31" class="text_centrer relative" onclick="afficherPropriete('7.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE DE BRETEUIL</p><p></p><p id="prix31" class="rien">300 €</p>
        </td>
        <td class="maison7"></td>
        <!-- CASE 10 DE LA LIGNE DE DROITE -->
        <td class="maison4"></td>
        <td id="19" class="text_centrer relative" onclick="afficherPropriete('4.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">PLAGE PIGALLE</p><p></p><p id="prix19" class="rien">200 €</p>
        </td>
      </tr>
      <!-- TROISIEME LIGNE -->
      <tr class="Lbas">
        <!-- CASE 1 -->
        <td id="30" colspan="2" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">Aller en prison</p>
        </td>
        <!-- CASE 2 -->
        <td class="maison6"></td>
        <!-- CASE 3 -->
        <td id="28"rowspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">COMPAGNIE DE DISTRUBUTION DES EAUX</p><img src="Image/eau.gif" class="caseTrain" alt="train" />
          <p id="prix28" class="rien">150 €</p>
        </td>
        <!-- CASE 4 -->
        <td class="maison6"></td>
        <!-- CASE 5 -->
        <td class="maison6"></td>
        <!-- CASE 6 -->
        <td id="25" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('gare3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">GARE DU NORD</p><img src="Image/train.png" class="caseTrain" alt="train" /><p id="prix25" class="rien">200 €</p>
        </td>
        <!-- CASE 7 -->
        <td class="maison5"></td>
        <!-- CASE 8 -->
        <td class="maison5"></td>
        <!-- CASE 9 -->
        <td id="22" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">CHANCE</p><img src="Image/Chance 1.gif" class="caseTrain" alt="train" />
        </td>
        <!-- CASE 10 -->
        <td class="maison5"></td>
        <!-- CASE 11 -->
        <td id="20" colspan="2" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">Parking gratuit</p><img src="Image/parc_gratuit.png" class="caseTrain" alt="train" />
        </td>
      </tr>
      <!-- TOUJOURS TROISIEME LIGNE POUR LES COULEURS DES EMPLACEMENTS -->
      <tr class="Lbas">
        <!-- CASE 2 -->
        <td id="29" class="text_centrer relative" onclick="afficherPropriete('6.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE LA FAYETTE</p><p></p><p id="prix29" class="rien">280 €</p>
        </td>
        <!-- CASE 4 -->
        <td id="27" class="text_centrer relative" onclick="afficherPropriete('6.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">PLACE DE LA BOURSE</p><p></p><p id="prix27" class="rien">260 €</p>
        </td>
        <!-- CASE 5 -->
        <td id="26" class="text_centrer relative" onclick="afficherPropriete('6.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">FAUBOURG SAINT-HONORE</p><p></p><p id="prix26" class="rien">260 €</p>
        </td>
        <!-- CASE 7 -->
        <td id="24" class="text_centrer relative" onclick="afficherPropriete('5.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE HENRI-MARTIN</p><p></p><p id="prix24" class="rien">240 €</p>
        </td>
        <!-- CASE 8 -->
        <td id="23" class="text_centrer relative" onclick="afficherPropriete('5.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">BOULEVARD MALESHERBES</p><p></p><p id="prix23" class="rien">220 €</p>
        </td>
        <!-- CASE 10 -->
        <td id="21" class="text_centrer relative" onclick="afficherPropriete('5.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE MATIGNON</p><p></p><p id="prix21" class="rien">220 €</p>
        </td>

      </tr>

    </table>

  </center>

  <!-- LES DEUX DES -->
  <div id="dice1" class="dice"><p>0</p></div>
  <div id="dice2" class="dice"><p>0</p></div>
  <input type="button"  id="roll" name="roll" value="Let's Roll !" />
  <input type="button" id="passer" name="" value="Finir le tour">

  <script src="js/gestionTour.js"></script>
  <script>



    function showRand(){
      var random1 = Math.floor(Math.random() * 6 + 1);
      var random2 = Math.floor(Math.random() * 6 + 1);
      $("#dice1").text(random1);
      $("#dice2").text(random2);

    }

    function setIntervals(callback, delay, repetitions){
      var a = 0;
      var intervalID = setInterval(function(){
        callback();
        if (++a === repetitions){
          clearInterval(intervalID);
          $("dice1").text(Math.floor(Math.random() * 6 + 1));
          $("dice2").text(Math.floor(Math.random() * 6 + 1));
          deplacer_joueur(recuperer_des());
        }
      }, delay);
    }

    $("#roll").click(function(){
      setIntervals(showRand, 10, 40);

    });



  </script>
  <script>
    function afficherPropriete(nb) {
      $( "#titre_centre" ).html( '<div class="image_centre" id="info_centre"><button id="btnFermerInfo" onclick="afficherTitre()">X</button><img id="carteInfo" src="Image/couleur' + nb + '.png" alt="Image carte case"/></div>' );
    }
    function afficherTitre() {
      $( "#titre_centre" ).html( "<h1>MONOPOLY</h1>" );
    }
  </script>
  <script>/*
  $(document).ready(function(){
    $.ajax({
      url : 'php/start.php',
      dataType : 'json',
      success : function(data){
        var id = data[0].joueur_id;
        var argent = data[0].joueur_argent;
        var case_courante = data[0].joueur_case_courante;
        $('#joueurs').html("Joueur "+id+" : "+argent+"€ (case courante = "+case_courante+")");
      }
    });
  }); */
  </script>
</body>
</html>
