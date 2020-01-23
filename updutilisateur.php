<?php
include_once('connexion_bdd.php');
$sql = "UPDATE utilisateur SET nom_user='zaki' WHERE mdp_user=37";

if ($bdd->exec($sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($bdd);
}