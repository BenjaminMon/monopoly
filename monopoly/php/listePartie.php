<?php

function addLog($txt)
 {
    file_put_contents("../log.txt", date("[j/m/y H:i:s]")." - $txt \r\n", FILE_APPEND);
    echo date("[j/m/y H:i:s]")." - $txt <br>";
 }

$link = mysqli_connect("127.0.0.1", "root", "") or
die("Impossible de se connecter : " . mysql_error());
mysqli_select_db($link, "monopoly");
mysqli_set_charset($link, "utf8");

if($_GET['ope'] == 'liste'){
  $listePartie = array();
  $req = mysqli_query($link,
    'SELECT partie_id, partie_nom, partie_nbJoueur, partie_plein, user_pseudo FROM partie
    INNER JOIN user ON user_id = partie_go'
  );

  while ($row = mysqli_fetch_array($req, MYSQL_ASSOC)) {
     $listePartie[] = [
       'partie_id' => $row['partie_id'],
       'partie_nom' => $row['partie_nom'],
       'partie_nbJoueur' => $row['partie_nbJoueur'],
       'partie_plein' => $row['partie_plein'],
       'user_pseudo' => $row['user_pseudo']
     ];
  }
  $test = json_encode($listePartie);
  echo $test;
  /*$test2 = json_decode($test);
  var_dump($test2);
  echo $test2[0]->partie_nom;*/
}

if($_GET['ope'] == 'ajout'){

  addLog('pseudo : '.$_GET['pseudo'].' / nom : '.$_GET['nom'].' / nbJ : '.$_GET['nbJ']);
  addLog('ok');

  $req = mysqli_query($link, 'INSERT INTO user (user_pseudo) VALUES ("'.$_GET['pseudo'].'")');
  $req2 = mysqli_query($link, 'SELECT user_id FROM user WHERE user_pseudo = "'.$_GET['pseudo'].'"');
  while ($row = mysqli_fetch_array($req2, MYSQL_ASSOC)) {
     $id = $row['user_id'];
  }
  addLog($id);
  $req3 = mysqli_query($link,
    'INSERT INTO partie (partie_nom, partie_go, partie_nbJoueur, partie_plein)
    VALUES ("'.$_GET['nom'].'", '.$id.', "'.$_GET['nbJ'].'", 0)'
  );

}

?>
