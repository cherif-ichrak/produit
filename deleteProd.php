<?php
include 'connexion.php';


$req=$dbstds->prepare("DELETE FROM produit where pid=:pid");

$req->bindParam(':pid',$_GET['pid']);

$req->execute();

header('Location:Produitindex.php');
?>