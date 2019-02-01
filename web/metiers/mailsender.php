<?php
session_start();
if(is_null($_SESSION['prenom'])){
    header("location:../index.php");
}else{
include ("../data/connexion.php");
$to = $_POST['to'];

$destinataire=$connexion->query("SELECT login,nom,prenom from users WHERE email like '$to' ");
$destinataire->setFetchMode(PDO::FETCH_OBJ);

foreach($destinataire as $row){
  $loginDest=$row->login;
  $nomDest=$row->nom;
  $prenomDest=$row->prenom;
}

$stmt = $connexion->prepare('INSERT INTO inmail (sender,recipient,sendername,recipientname,objet,msg) VALUES (:sender,:recipient,:sendername,:recipientname,:objet,:msg)');
 
$loginExp = $_SESSION['login'];
$objet = $_POST['about'];
$msg = $_POST['msg'];
$nomExp = $_SESSION['nom'];
$prenomExp = $_SESSION['prenom'];

$stmt->bindValue(':sender', $loginExp,PDO::PARAM_INT);
$stmt->bindValue(':recipient', $loginDest,PDO::PARAM_INT);
$stmt->bindValue(':sendername',$nomExp." ".$prenomExp ,PDO::PARAM_STR);
$stmt->bindValue(':recipientname', $nomDest." ".$prenomDest,PDO::PARAM_STR);
$stmt->bindValue(':objet', $objet,PDO::PARAM_STR);
$stmt->bindValue(':msg', $msg,PDO::PARAM_STR);
$stmt->execute();
header("Location: ./sendingdone.php");
};
?>