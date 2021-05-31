<?php
include "includes/connect.php";

// Formulardaten als Variable sichern, prüfen und Injektion verhindern
$vname = $mysqli->real_escape_string($_POST["vname"]);
$nname = $mysqli->real_escape_string($_POST["nname"]);
$email = $mysqli->real_escape_string($_POST["email"]);
$nameschmetterling = $mysqli->real_escape_string($_POST["nameschmetterling"]);
$beschrschmetterling = $mysqli->real_escape_string($_POST["beschrschmetterling"]);
$locationschmetterling = $mysqli->real_escape_string($_POST["locationschmetterling"]);

if ($vname === "" || $nname === "" || $email === "" || $nameschmetterling === "") {
	echo "Name und Email dürfen nicht leer sein!";
	exit();
}

// SQL zusammenstellen, um die Werte in die Datenbank einzufügen
$sql = "INSERT INTO `posts` (`Id`, `Vorname`, `Nachname`, `EMail`, `SName`, `SBeschreibung`, `SOrt`) VALUES (NULL, '" . $vname . "', '" . $nname . "', '" . $email . "', '" . $nameschmetterling . "', '" . $beschrschmetterling . "', '" . $locationschmetterling . "')";

// SQL ausführen und Fehler abfangen
if ($mysqli->query($sql) !== TRUE) {
	echo "Error: " . $sql . "<br>" . $mysqli->error;
	exit();
}

// Verbindung schliessen
$mysqli->close();

// Weiterleitung
header('Location: index.html');