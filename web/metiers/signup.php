<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="../js/index.js"></script>
    </head>
        <body>
        <div class="container">
            <div class="home">
                <h1 class="titre">Création de compte</h1>
                <form method="post" action="./checkingsign.php">
                    <fieldset>
                        <div class="form-group">
                            <legend>Sign Up</legend>
                            <label for="nom">Nom :</label>
                            <input type="text" name="nom" id="nom"  class="form-control form-control-sm"required />
                        </div>
                        <div class="form-group">    
                            <label for="prenom">Prénom :</label>
                            <input type="text" name="prenom" id="prenom"  class="form-control form-control-sm"required />
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail :</label>
                            <input type="email" name="email" id="email" class="form-control form-control-sm"required />
                        </div>
                        <div class="form-group">
                            <label for="phone">Numéro de téléphone :</label>
                            <input type="number" name="phone" id="phone" class="form-control form-control-sm"required />
                        </div>
                        <div class="form-group">
                            <label for="login">Login :</label>
                            <input type="number" name="login" id="login" max="20" class="form-control form-control-sm"required />
                        </div>
                        <div class="form-group">
                            <label for="pass">Mot de passe :</label>
                            <input type="password" name="pass" id="pass" class="form-control form-control-sm" required />
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">S'enregistrer</button>
                        </div>      
                    </fieldset>
                </form>
            </div>
        </div>
        </body>
</html>