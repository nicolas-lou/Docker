<?php
session_start();
if(is_null($_SESSION['prenom'])){
    header("location:../index.php");
}else{
include ("../data/connexion.php");
    if(isset($_GET['q'])){
        $recherche = $_GET['q'];
    }else{
        $recherche = "";
    };
};
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>rechercher</title>
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
        <button type="button" class="btn btn-dark"><a href="../data/deco.php">Deconnexion</a></button>
    </div>             
        <form role="search" id="rechercher">
        <h5>Rechercher un mail</h5> 
        <div class="form-group">            
            <input type="search" id="maRecherche" name="q"
            placeholder="Recherchez dans vos mails"
            aria-label="Rechercher parmi les emails" class="form-control form-control-sm">
        </div>
        <button class="btn btn-primary btn-sm">Rechercher</button>        
        </form>
        <table id="in_tablefinder" class="table table-striped table-bordered" style="width:70%">
            <thead>
                <tr>
                    <th>Etat</th>
                    <th>Personne</th>                    
                    <th>Objet</th>                
                </tr>
            </thead> 
            <tbody>   
            <?php
            $login = $_SESSION['login'];
            $mails=$connexion->query("select * from inmail WHERE (sender = $login or recipient = $login) and objet like '%{$recherche}%'");
            $mails->setFetchMode(PDO::FETCH_OBJ);        
                foreach($mails as $row){
                    if($row->sender==$login){
                        echo "<tr>";            
                        echo "<td>Destinataire :</td>";
                        echo "<td><a href='./mailcontainer.php?id={$row->idmail}'>{$row->recipientname}</td>";                        
                        echo "<td><a href='./mailcontainer.php?id={$row->idmail}'>{$row->objet}</td>";
                        echo "</tr>";                        
                    }else{
                        echo "<tr>";            
                        echo "<td>Expediteur :</td>";
                        echo "<td><a href='./mailcontainer.php?id={$row->idmail}'>{$row->sendername}</td>";                        
                        echo "<td><a href='./mailcontainer.php?id={$row->idmail}'>{$row->objet}</td>";
                        echo "</tr>"; 
                    }           
                }        
            ?>
            </tbody>
                <tfoot>
                    <tr>
                        <th>Etat</th>
                        <th>Personne</th>                        
                        <th>Objet</th>
                    </tr>
                </tfoot>
        </table>
    </div>                    
    </body>
</html>