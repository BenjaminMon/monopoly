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
    <p>Nombre de joueur : </p>
    <div id="joueurs"><p>qqch</p></div>
  </div>
  <center>
    <table>
      <!-- PREMIERE LIGNE -->
      <tr class="Lhaut">
        <!-- CASE 1 -->
        <td colspan="2" rowspan="2" class="text_centrer relative" onclick="afficherPropriete('depart')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <div class="relative">
            <p class="relative caseNormal">Départ &rarr;</p>
          </div>
        </td>

        <!-- CASE 2 -->
        <td class="text_centrer relative" onclick="afficherPropriete('1.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">BOULEVARD DE BELLEVILLE</p><p></p><p class="rien">60 €</p>
        </td>

        <!-- CASE 3 -->
        <td rowspan="2" class="relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          3
        </td>

        <!-- CASE 4 -->
        <td class="text_centrer relative" onclick="afficherPropriete('1.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE LECOURBE</p><p></p><p class="rien">60 €</p>
        </td>

        <!-- CASE 5 -->
        <td rowspan="2" class="relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          5
        </td>

        <!-- CASE 6 -->
        <td rowspan="2" class="text_centrer relative" onclick="afficherPropriete('gare1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">GARE MONTPARNASSE</p><img src="Image/train.png" class="caseTrain" alt="train" /><p class="rien">200 €</p>
        </td>

        <!-- CASE 7 -->
        <td class="text_centrer relative" onclick="afficherPropriete('2.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
            <p class="rien">RUE DE VAUGIRARD</p><p></p><p class="rien">100 €</p>
        </td>

        <!-- CASE 8 -->
        <td rowspan="2" class="relative" onclick="afficherPropriete('')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          8
        </td>

        <!-- CASE 9 -->
        <td class="text_centrer relative" onclick="afficherPropriete('2.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE DE COURCELLES</p><p></p><p class="rien">100 €</p>
        </td>

        <!-- CASE 10 -->
        <td class="text_centrer relative" onclick="afficherPropriete('2.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE DE LA REPUBLIQUE</p><p></p><p class="rien">120 €</p>
        </td>

        <!-- CASE 11 -->
        <td colspan="2" class="text_centrer relative" onclick="afficherPropriete('')">
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
        <td class="text_centrer relative" onclick="afficherPropriete('8.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE DE LA PAIX</p><p></p><p class="rien">400 €</p>
        </td>
        <td class="maison8"></td>
        <!-- CASE CENTRALE -->
        <td id="titre_centre" colspan="9" rowspan="9">
          <h1>MONOPOLY</h1>
        </td>
        <!-- CASE 2 DE LA LIGNE DE DROITE -->
        <td class="maison3"></td>
        <td class="text_centrer relative" onclick="afficherPropriete('3.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">BOULEVARD DE LA VILLETTE</p><p></p><p class="rien">140 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 3 DE LA LIGNE DE GAUCHE -->
        <td colspan="2" class="relative">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          3
        </td>
        <!-- CASE 3 DE LA LIGNE DE DROITE -->
        <td colspan="2" class="relative">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="Ldroite">9</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 4 DE LA LIGNE DE GAUCHE -->
        <td class="text_centrer relative" onclick="afficherPropriete('8.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE DES CHAMPS-ELYSEES</p><p></p><p class="rien">350 €</p>
        </td>
        <td class="maison8"></td>
        <!-- CASE 4 DE LA LIGNE DE DROITE -->
        <td class="maison3"></td>
        <td class="text_centrer relative" onclick="afficherPropriete('3.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE DE NEUILLY</p><p></p><p class="rien">140 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 5 DE LA LIGNE DE GAUCHE -->
        <td colspan="2" class="relative">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          5
        </td>
        <td class="maison3"></td>
        <!-- CASE 5 DE LA LIGNE DE DROITE -->
        <td class="text_centrer relative" onclick="afficherPropriete('3.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE DE PARADIS</p><p></p><p class="rien">160 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 6 DE LA LIGNE DE GAUCHE -->
        <td colspan="2" class="text_centrer relative" onclick="afficherPropriete('gare4')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">GARE SAINT-LAZARE</p><img src="Image/train.png" class="caseTrain" alt="train" /><p class="rien">200 €</p>
        </td>
        <!-- CASE 6 DE LA LIGNE DE DROITE -->
        <td colspan="2" class="text_centrer relative" onclick="afficherPropriete('gare2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">GARE DE LYON</p><img src="Image/train.png" class="caseTrain" alt="train" /><p class="rien">200 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 7 DE LA LIGNE DE GAUCHE -->
        <td class="text_centrer relative" onclick="afficherPropriete('7.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">BOULEVARD DES CAPUCINES</p><p></p><p class="rien">320 €</p>
        </td>
        <td class="maison7"></td>
        <!-- CASE 7 DE LA LIGNE DE DROITE -->
        <td class="maison4"></td>
        <td class="text_centrer relative" onclick="afficherPropriete('4.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE MOZART</p><p></p><p class="rien">180 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 8 DE LA LIGNE DE GAUCHE -->
        <td colspan="2" class="relative">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          8
        </td>
        <!-- CASE 8 DE LA LIGNE DE DROITE -->
        <td colspan="2" class="relative">
          <!--<img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="Ldroite">4</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 9 DE LA LIGNE DE GAUCHE -->
        <td class=" text_centrer relative" onclick="afficherPropriete('7.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE FOCH</p><p></p><p class="rien">300 €</p>
        </td>
        <td class="maison7"></td>
        <!-- CASE 9 DE LA LIGNE DE DROITE -->
        <td class="maison4"></td>
        <td class="text_centrer relative" onclick="afficherPropriete('4.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">BOULEVARD SAINT-MICHEL</p><p></p><p class="rien">180 €</p>
        </td>
      </tr>

      <tr>
        <!-- CASE 10 DE LA LIGNE DE GAUCHE -->
        <td class="text_centrer relative" onclick="afficherPropriete('7.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE DE BRETEUIL</p><p></p><p class="rien">300 €</p>
        </td>
        <td class="maison7"></td>
        <!-- CASE 10 DE LA LIGNE DE DROITE -->
        <td class="maison4"></td>
        <td class="text_centrer relative" onclick="afficherPropriete('4.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">PLAGE PIGALLE</p><p></p><p class="rien">200 €</p>
        </td>
      </tr>
      <!-- TROISIEME LIGNE -->
      <tr class="Lbas">
        <!-- CASE 1 -->
        <td colspan="2" rowspan="2" class="text_centrer relative">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          Aller en prison
        </td>
        <!-- CASE 2 -->
        <td class="maison6"></td>
        <!-- CASE 3 -->
        <td rowspan="2 relative">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          9
        </td>
        <!-- CASE 4 -->
        <td class="maison6"></td>
        <!-- CASE 5 -->
        <td class="maison6"></td>
        <!-- CASE 6 -->
        <td rowspan="2" class="text_centrer relative" onclick="afficherPropriete('gare3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">GARE DU NORD</p><img src="Image/train.png" class="caseTrain" alt="train" /><p class="rien">200 €</p>
        </td>
        <!-- CASE 7 -->
        <td class="maison5"></td>
        <!-- CASE 8 -->
        <td class="maison5"></td>
        <!-- CASE 9 -->
        <td rowspan="2" class="relative">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          3
        </td>
        <!-- CASE 10 -->
        <td class="maison5"></td>
        <!-- CASE 11 -->
        <td colspan="2" rowspan="2" class="text_centrer relative">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          Parking gratuit
        </td>
      </tr>
      <!-- TOUJOURS TROISIEME LIGNE POUR LES COULEURS DES EMPLACEMENTS -->
      <tr class="Lbas">
        <!-- CASE 2 -->
        <td class="text_centrer relative" onclick="afficherPropriete('6.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">RUE LA FAYETTE</p><p></p><p class="rien">280 €</p>
        </td>
        <!-- CASE 4 -->
        <td class="text_centrer relative" onclick="afficherPropriete('6.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">PLACE DE LA BOURSE</p><p></p><p class="rien">260 €</p>
        </td>
        <!-- CASE 5 -->
        <td class="text_centrer relative" onclick="afficherPropriete('6.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">FAUBOURG SAINT-HONORE</p><p></p><p class="rien">260 €</p>
        </td>
        <!-- CASE 7 -->
        <td class="text_centrer relative" onclick="afficherPropriete('5.3')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE HENRI-MARTIN</p><p></p><p class="rien">240 €</p>
        </td>
        <!-- CASE 8 -->
        <td class="text_centrer relative" onclick="afficherPropriete('5.2')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">BOULEVARD MALESHERBES</p><p></p><p class="rien">220 €</p>
        </td>
        <!-- CASE 10 -->
        <td class="text_centrer relative" onclick="afficherPropriete('5.1')">
          <!-- JOUEUR ICI : <img src="Image/joueur1.png" class="joueur1 absolute" alt="J1" />-->
          <p class="rien">AVENUE MATIGNON</p><p></p><p class="rien">220 €</p>
        </td>

      </tr>

    </table>

  </center>

  <!-- LES DEUX DES -->
  <div id="dice1" class="dice"><p>0</p></div>
  <div id="dice2" class="dice"><p>0</p></div>
  <input type="button"  id="roll" name="roll" value="Let's Roll !" />
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
        }
      }, delay);
    }
    $("#roll").click(function(){
      setIntervals(showRand, 10, 40)
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
  <script>
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
  });
  </script>
</body>
</html>
