<?php
include 'connexion.php';
$nom=$_POST['nom'];
$description=$_POST['description'];
$prix=$_POST['prix'];
$ficher=$_POST['ficher'];

$req=$dbstds->prepare("INSERT INTO produit VALUES (null, :pid ,:name  , :Description , :Prix , :Ficher)");
$req->bindParam(':name',$name);
$req->bindParam(':Description',$description);
$req->bindParam(':Prix',$prix);
$req->bindParam(':Fichier',$fichier);

$req->execute();

header('Location:Produitindex.php');
?>