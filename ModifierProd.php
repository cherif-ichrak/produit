<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=".\bootstrap-4.3.1-dist\css\bootstrap.css">
    <script src=".\bootstrap-4.3.1-dist\js\bootstrap.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include 'connexion.php';
    $req=$dbstds->prepare('SELECT * FROM produit where pid= :param_pid');
    $req->bindParam(':param_pid',$_GET['pid']);
    $req->execute();
    $data=$req->fetch();

    ?>
    <div class="container">
        <fieldset>
            <legend>modifier Produit</legend>
            <form action="updateProd.php" method="post">
                <div class="form-group">
                    <label for="fn"> Name</label>
                    <input type="text" class="form-control" name="name" value="<?=$data['nom']?>">
                </div>
                <div class="form-group">
                    <label for="ln">Description</label>
                    <input type="text" class="form-control" name="Description" value="<?=$data['description']?>">
                </div>
                <div class="form-group">
                    <label for="Prix">Prix</label>
                    <input type="Prix" class="form-control" name="Prix" value="<?=$data['prix']?>">
                </div>
                <div class="form-group">
                    <label for="ph">Fichier</label>
                    <input type="text" class="form-control" name="Fichier" value="<?=$data['fichier']?>">
                </div>
                <input type="number" name="pid" id='pid' value="<?=$_GET['pid']?>" hidden>
                <button type="submit" class="btn btn-outline-success">Modifier</button>
            </form>
        </fieldset>
    </div>
</body>
</html>