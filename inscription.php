<?php
include_once('connexion_bdd.php');


if (isset($_POST['mdp']) && isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['role'])) {

    $mdp = $_POST['mdp'];
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $role = $_POST['role'];

    try {
        $sql = "INSERT INTO utilisateur (mdp_user, mail_user, nom_user,prenon_user, profil)
        VALUES ('$mdp', '$email','$nom','$prenom','$role' )";
        $bdd->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    header('location: utilisateur.php?error=succes');


} else {
    header('location: utilisateur.php?error=empty');
}

