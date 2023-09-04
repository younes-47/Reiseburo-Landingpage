<?php
$nom_messager = $_POST['nom_messager'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "agence-de-voyage";

//connection + saisie

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (!$conn) {
    die("Connection échoué: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (nom_messager, email, sujet, message) VALUES ('$nom_messager', '$email', '$sujet', '$message')";
mysqli_query($conn, $sql);
mysqli_close($conn);

header("Location: ../pages-secondaires/message.html");