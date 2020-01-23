<!DOCTYPE html>
<html>
<head>
<?php
if (isset($_GET['error'])){
    if($_GET['error'] == 'empty') {
        $message = '<div class="alert alert-danger">Vueillez renseinger tous les champs!</div>';
    }elseif ($_GET['error'] == 'succes'){
        $message = '<div class="alert alert-success">Votre compte a été bien crée!</div>';

    }
}
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Créer un compte</h4>

            <form style="width: 120%" method="post" action="inscription.php">
                <?php if(isset($message)): echo $message; endif; ?>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="nom" class="form-control" placeholder="Nom" type="text">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="prenom" class="form-control" placeholder="Prenom" type="text">
                </div> <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email" type="email">
                </div> <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <select name="role" class="form-control">
                        <option selected=""> Selectionner un Role</option>
                        <option value="administrateur">Administrateur</option>
                        <option value="responsable">Responsable p</option>
                        <option value="enseignant">Enseignant</option>
                        <option value="secretaire">Secretaire</option>
                        <option value="etudiant">Etudiant</option>
                    </select>
                </div> <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="mdp" class="form-control" placeholder="Mot de passe" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="mdpConfirm" class="form-control" placeholder="Confirmer mot de passe" type="password">
                </div> <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Enregistrer</button>
                </div> <!-- form-group// -->
                <p class="text-center">Vous avez déja un compte? <a href=""> Se connecter</a></p>
            </form>
        </article>
    </div> <!-- card.// -->

</div>
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">
    <div class="card-body text-center">

        <br><br>
</article>
</head>
<body>
