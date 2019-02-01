<?php
$user="root";
$pass= "root";
$db = "idpmail";

try {
    $connexion = new PDO("mysql:host=mysql_server;dbname=$db;port=3306", $user, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
}
?>