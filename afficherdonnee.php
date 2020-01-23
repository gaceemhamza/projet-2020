<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>

<?php

include_once('connexion_bdd.php');

// la requete
$sql = "SELECT * FROM `utilisateur` "; // de preference select *
// attention if faut pas oublie d'executer la requete
$resultat = $bdd->query($sql);

?>

<table class="table" style="width: 50%; margin: auto">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Profile</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($donnees = $resultat->fetch()){
        echo "
        <tr>
        <th scope='row'> " .$donnees['id']." </th>
        <td>" .$donnees['nom_user']."</td>
        <td>".$donnees['profil']."</td>
        <td>".$donnees['mail_user']."</td>
    </tr>
    ";
    }
    ?>
    </tbody>
</table>
</body>
</html>





