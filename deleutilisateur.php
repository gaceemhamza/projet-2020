<?php
include_once('connexion_bdd.php');
try{
$sql = "DELETE FROM utilisateur";
$bdd->exec($sql);
echo "operation reussi";
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}