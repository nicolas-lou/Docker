<?php
include ("../data/connexion.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$login = $_POST['login'];
$pass = $_POST['pass'];

$connexion->exec("INSERT INTO users (nom,prenom,email,phone,login,password) VALUES ('$nom','$prenom','$email',$phone,$login,'$pass')");

header("Location: ./signcomplete.php");

?>