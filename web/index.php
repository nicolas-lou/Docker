<?php
function wronglogin(){
    if(isset($_GET['l'])){
        echo '<p id="falseID" style="color:red; margin:auto;">Login / Mot de passe incorrect</p>';
    };
};
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>IDP Full Stack Mail</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>        
<link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" />
<script src="/js/index.js"></script>
</head>
    <body>
    <div class="container">
        <h1>IDP Full Stack  Mail</h1>
        <?php wronglogin();?>
        <div>
            <form method="post" action="/metiers/validation.php" id="login_container">
                <div class="form-group"> 
                    <label for="login">Login :</label>
                    <input type="number" name="login" id="login" class="form-control form-control-sm" required />
                </div>
                <div class="form-group">                
                    <label for="pass">Mot de passe :</label>
                    <input type="password" name="pass" id="pass" class="form-control form-control-sm" required />
                </div>
                <a href="/metiers/signup.php">Création de compte</a>
                <button type="submit" class="btn btn-dark">Se connecter</button>                
            </form>
        </div>
    </div>
    </body>
</html>

