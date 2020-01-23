<?php
include_once('connexion_bdd.php');


if (!empty($_POST['mdp']) && !empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['role'])) {

    $mdp = $_POST['mdp'];
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $role = $_POST['role'];

    // on teste si les deux mots de passe sont identique
    if ($mdp === $_POST['mdpConfirm']) {
        try {
            $sql = "INSERT INTO utilisateur (mdp_user, mail_user, nom_user,prenon_user, profil)
        VALUES ('$mdp', '$email','$nom','$prenom','$role' )";
            $bdd->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        header('location: utilisateur.php?error=succes');
    }else{

        header('location: utilisateur.php?error=mdp');
    }

} else {
    header('location: utilisateur.php?error=empty');
}

