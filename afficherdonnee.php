<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>


<?php
include_once('connexion_bdd.php');
$reponse = $bdd->query('SELECT mdp_user, mail_user, nom_user, prenon_user, profil  FROM utilisateur ');

while ($donnees = $reponse->fetch())
{
    echo "<table><tr><th>nom_user</th><th>prenon_user</th><th>profil</th><th>mail_user</th><th>mdp_user</th></tr>";


    echo "<tr><td>" .$donnees['nom_user']."</td><td>". $donnees['prenon_user']."</td><td>".$donnees['profil']."</td><td>".$donnees['mail_user']."</td><td>".$donnees['mdp_user']."</td></tr>";

}
 echo "</table>";



