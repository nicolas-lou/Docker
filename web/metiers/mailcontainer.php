<?php 
session_start();
if(is_null($_SESSION['prenom'])){
    header("location:../index.php");
}else{
include ("../data/connexion.php");
$id = $_GET['id'];
$connexion->exec("UPDATE inmail SET lu=1 WHERE idmail={$id}");
};
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Message frome ??</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
        <script src="../js/main.js"></script>
    </head>
    <body>
    <div class="container">
        <h1><?php echo $_SESSION['prenom'];echo " ";echo $_SESSION['nom']; ?></h1>
        <div class="boutton_container">
        <button type="button" class="btn btn-dark"><a href="./home.php">Accueil</a></button>             
        <button type="button" class="btn btn-dark"><a href="./inbox.php">Boite de récéption</a></button>
        <button type="button" class="btn btn-dark"><a href="../data/deco.php">Deconnexion</a></button>
    </div>       
        <?php 
            $login = $_SESSION['login'];
            $mail=$connexion->query("SELECT sender,objet,msg,sendername,recipientname from inmail WHERE idmail like $id");
            $mail->setFetchMode(PDO::FETCH_OBJ);        
            foreach($mail as $row){
            echo "<div class='card'>";
            echo "<div class='card-body'>";
            echo "<h4 class='card-title'>Objet: {$row->objet}</h4>";
            echo "<h6 class='card-subtitle mb-2 text-muted'>Expediteur: {$row->sendername}</h6>";
            echo "<h6 class='card-subtitle mb-2 text-muted'>Destinataire: {$row->recipientname} </h6>";
            echo "<p class='card-text'>{$row->msg}</p>";
            echo "</div>";
            echo "</div>";                 
            };
        ?>
    </div>
    </body>
</html>