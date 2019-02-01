<?php 
 session_start();
 include ("../data/connexion.php");
$login = $_POST['login'];
$password = $_POST['pass'];
$resultats=$connexion->query("SELECT * from users WHERE login like $login and password like '$password'");
$resultats->setFetchMode(PDO::FETCH_OBJ);
$row =$resultats->fetchAll();
if (count($row)!=0){
    $_SESSION['connect'] = 1;
    $_SESSION['prenom']=$row[0]->prenom;
    $_SESSION['nom']=$row[0]->nom;   
    $_SESSION['login']=$row[0]->login;
    header("Location: ./home.php");
}
else{ 
    header('location: ../index.php?l=false');}
     
?>