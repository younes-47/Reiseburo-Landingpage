<?php

$destination = $_POST['destination'];
$nombre_personnes = $_POST['nombre_personnes'];
$nom_complet = $_POST['nom_complet'];
$tele = $_POST['tele'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "agence-de-voyage";

//connection + saisie

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO reservation (destination, nombre_personnes, nom_complet, tele) VALUES ('$destination', '$nombre_personnes', '$nom_complet', '$tele')";
mysqli_query($conn, $sql);
mysqli_close($conn);

header("Location: ../pages-secondaires/réservation.html");
