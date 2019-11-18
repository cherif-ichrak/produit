<?php
include 'connexion.php';
$nom=$_POST['nom'];
$description=$_POST['description'];
$prix=$_POST['prix'];
$ficher=$_POST['ficher'];
$pid=$_POST['pid'];

$req=$dbstds->prepare('UPDATE produit SET nom=:nom, description=:description , prix=:prix, ficher=:ficher WHERE pid=pid');

$req->bindParam(':nom',$nom);
$req->bindParam(':description',$description);
$req->bindParam(':prix',$prix);
$req->bindParam(':ficher',$ficher);
$req->bindParam(':pid',$pid);
$req->execute();
header('Location:Prduitindex.php');
?>