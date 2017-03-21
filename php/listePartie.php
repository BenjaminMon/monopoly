<?php

function addLog($txt)
 {
    file_put_contents("../log.txt", date("[j/m/y H:i:s]")." - $txt \r\n", FILE_APPEND);
    echo date("[j/m/y H:i:s]")." - $txt <br>";
 }

$link = mysqli_connect("127.0.0.1", "monopoly", "") or
die("Impossible de se connecter : " . mysql_error());
mysqli_select_db($link, "monopoly");
mysqli_set_charset($link, "utf8");

if($_GET['ope'] == 'liste'){
  $listePartie = array();
  $req = mysqli_query($link,
    'SELECT g.partie_id, partie_nom, partie_nbJoueur, partie_plein, user_pseudo, COUNT(g.joueur_id) AS nbJ FROM partie
    INNER JOIN user ON user_id = partie_go
    INNER JOIN groupe g ON g.partie_id = partie.partie_id
    GROUP BY g.partie_id'
  );

  while ($row = mysqli_fetch_array($req, MYSQL_ASSOC)) {
     $listePartie[] = [
       'partie_id' => $row['partie_id'],
       'partie_nom' => $row['partie_nom'],
       'partie_nbJoueur' => $row['partie_nbJoueur'],
       'partie_plein' => $row['partie_plein'],
       'user_pseudo' => $row['user_pseudo'],
       'nbJ' => $row['nbJ']
     ];
  }
  $test = json_encode($listePartie);
  echo $test;
}

if($_GET['ope'] == 'listeNbJ'){
  $listeNbJ = array();

  $id = $_GET['partie'];

  $stmt = mysqli_prepare($link, "SELECT partie_id, partie_nbJoueur FROM partie
  WHERE partie_id = ? ");

  mysqli_stmt_bind_param($stmt, "s", $id);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $district, $district2);
  mysqli_stmt_fetch($stmt);

  $listeNbJ[] = ['partie_id' => $district, 'nb_joueur' => $district2];

  $test = json_encode($listeNbJ);
  echo $test;
}

if($_GET['ope'] == 'incNbJ'){
  $nbJ = array();

  $newId = $_GET['id'];

  $stmt = mysqli_prepare($link, "SELECT COUNT(*) AS nb_joueur FROM groupe
    WHERE partie_id = ? GROUP BY partie_id");

  mysqli_stmt_bind_param($stmt, "s", $newId);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_bind_result($stmt, $district);
  mysqli_stmt_fetch($stmt);

  $nbJ[] = ['nb_joueur' => $district];

  $test = json_encode($nbJ);
  echo $test;
}

if($_GET['ope'] == 'ajout'){

  // Recup' id user
  $req = mysqli_query($link, 'INSERT INTO user (user_pseudo) VALUES ("'.$_GET['pseudo'].'")');
  $req2 = mysqli_query($link, 'SELECT user_id FROM user WHERE user_pseudo = "'.$_GET['pseudo'].'"');
  while ($row = mysqli_fetch_array($req2, MYSQL_ASSOC)) {
     $id = $row['user_id'];
  }

  $req3 = mysqli_query($link,
    'INSERT INTO partie (partie_nom, partie_go, partie_nbJoueur, partie_plein)
    VALUES ("'.$_GET['nom'].'", '.$id.', "'.$_GET['nbJ'].'", 0)'
  );
  $req4 = mysqli_query($link, 'SELECT partie_id FROM partie
    WHERE partie_nom = "'.$_GET['nom'].'" and partie_go = '.$id);
  while ($row = mysqli_fetch_array($req4, MYSQL_ASSOC)) {
     $idPart = $row['partie_id'];
  }
  $req5 = mysqli_query($link,
    'INSERT INTO groupe (partie_id, joueur_id, groupe_chef)
    VALUES ('.$idPart.', '.$id.', 1)'
  );

  $partie_id = ['partie_id' => $idPart];

  $test = json_encode($partie_id);
  echo $test;
}

if($_GET['ope'] == 'rejoindre'){

  $req = mysqli_query($link, 'INSERT INTO user (user_pseudo) VALUES ("'.$_GET['joueur'].'")');
  $req2 = mysqli_query($link, 'SELECT user_id FROM user WHERE user_pseudo = "'.$_GET['joueur'].'"');
  while ($row = mysqli_fetch_array($req2, MYSQL_ASSOC)) {
     $id = $row['user_id'];
  }

  $req5 = mysqli_query($link,
    'INSERT INTO groupe (partie_id, joueur_id)
    VALUES ('.$_GET['partie'].', '.$id.')'
  );

}

if($_GET['ope'] == 'getChefPartie'){

  $pseudo = array();

  $req = mysqli_query($link, 'SELECT user_pseudo FROM groupe g
  INNER JOIN user u ON g.joueur_id = u.user_id
  WHERE groupe_chef = 1 AND g.partie_id = "'.$_GET['partie'].'"');
  while ($row = mysqli_fetch_array($req, MYSQL_ASSOC)) {
   $pseudo = ['user_pseudo' => $row['user_pseudo']];
  }
  $test = json_encode($pseudo);
  echo $test;
}

if($_GET['ope'] == 'getParticipantPartie'){

  $pseudo = array();

  $req = mysqli_query($link, 'SELECT user_pseudo FROM groupe g
  INNER JOIN user u ON g.joueur_id = u.user_id
  WHERE groupe_chef = 0 AND g.partie_id = "'.$_GET['partie'].'"');
  while ($row = mysqli_fetch_array($req, MYSQL_ASSOC)) {
   $pseudo[] = ['user_pseudo' => utf8_encode($row['user_pseudo'])];
  }
  $test = json_encode($pseudo);
  echo $test;
}

?>
