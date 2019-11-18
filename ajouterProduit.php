<!DOCTYPE html>
<html lang="en">
<head>
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
        <fieldset>
            <legend >Ajouter Produit</legend>
            <form action="storeProd.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fn">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ln">Description</label>
                            <input type="text" class="form-control" name="Description">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Prix">Prix</label>
                            <input type="Prix" class="form-control" name="Prix">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <FORM ACTION="trait-new_fiche.php" method="POST" ENCTYPE="multipart/form-data">
                        <input type="hidden" name=\"max_file_size" value="50000">
                        <label for="title" class="float">Image : </label>  <input TYPE="file" NAME="image"><br>
                            
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary">Ajouter Produit</button>
                <button type="reset" class="btn btn-outline-danger">Anuler</button>
            </form>
        </fieldset>
    </div>
</body>
</html>