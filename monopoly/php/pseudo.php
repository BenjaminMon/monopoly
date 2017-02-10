<?php
/*
function addLog($txt)
 {
    file_put_contents("../log.txt", date("[j/m/y H:i:s]")." - $txt \r\n", FILE_APPEND);
    echo date("[j/m/y H:i:s]")." - $txt <br>";
 }
*/
$link = mysqli_connect("127.0.0.1", "root", "") or
die("Impossible de se connecter : " . mysql_error());
mysqli_select_db($link, "monopoly");
mysqli_set_charset($link, "utf8");

$listePC = array();
$req = mysqli_query($link, 'INSERT INTO user (user_pseudo) VALUES ("'.$_GET['pseudo'].'")');

while ($row = mysqli_fetch_array($req, MYSQL_ASSOC)) {
   $listePC[] = ['joueur_id' => $row['joueur_id'], 'joueur_argent' => $row['joueur_argent'], 'joueur_case_courante' => $row['joueur_case_courante']];
}

echo json_encode($listePC);

?>
