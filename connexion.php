<?php 
 try { 
    $dbstds = new PDO('mysql:host=localhost;dbname=produit;charset=utf8', 'root', '');
 } catch (Exception $e) { 
    echo $e->getMessage(); 
 }
?> 