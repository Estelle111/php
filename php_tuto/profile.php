<?php 
    $nom = null;
    if(!empty($_GET['action']) && $_GET['action'] === 'deconnecter') {
        unset($_COOKIE['user']);
        setcookie('user', '', time()-10);
    }
    if(!empty($_COOKIE['user'])) {
        $nom = $_COOKIE['user'];
    }
    if (!empty($_POST['nom'])) {
        setcookie('user', $_POST['nom']);
        $nom = $_POST['nom'];
    }

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>php/cookie</title>
        <style>
            .page{
                margin: 20%;
            }
        </style>
    </head>
    <body>
        <div class="page">
            <?php if($nom):?>
                <h1>Bonjour <?= htmlentities($nom) ?></h1>
                <a href="profile.php?action=deconnecter">Se déconnecter</a>
            <?php else: ?>
                <form action="" method="post"> 
                    <div class="form-group">
                        <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom">
                    </div>
                    <button class="btn btn-primary">Se connecter</button>
                </form>
            <?php endif; ?>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>



