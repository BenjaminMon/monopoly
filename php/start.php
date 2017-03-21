<?php

$link = mysqli_connect("127.0.0.1", "monopoly", "") or
die("Impossible de se connecter : " . mysql_error());
mysqli_select_db($link, "monopoly");
mysqli_set_charset($link, "utf8");

if($_GET['ope'] == 'liste'){

	$id_partie = $_GET['id_parite'];

	$stmt = mysqli_prepare($link, 'LOL');

}