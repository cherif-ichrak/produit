
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <table class="table table-dark table-striped">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>descrpition</th>
        <th>prix</th>
        <th>ficher</th>
    </tr>
        <?php
         include 'connexion.php';
         $req = $dbstds->prepare('SELECT * FROM produit');
         $req->execute();
         while($data = $req->fetch()){ 
            echo'<tr>';
            echo'<td>'.$data['id'].'</td>';
            echo'<td>'.$data['name'].'</td>';
            echo'<td>'.$data['Descrpition'].'</td>';
            echo'<td>'.$data['Prix'].'</td>';
            echo'<td>'.$data['Ficher'].'</td>';
            echo'</tr>';   
        }
        ?>   
        </table>
        <a href="ajouterProduit.php" class="btn btn-outline-success">ajouter</a>
        <a href="ModifierProd.php" class="btn btn-outline-success">modifier </a>
        <a href="deleteProd.php" class="btn btn-outline-success">Delete </a>
    </div>
<!-- jQuery library -->
</body>
</html>


