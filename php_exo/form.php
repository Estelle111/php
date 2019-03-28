<div id="bloc">
    <h2 id="form">FORM</h2>
    <div>
        <h3>exo 1&3</h3>
        <form method="get" action="user.php"> 
            <p>Votre prénom</p>
                <input type="text" name="prenom" />
            <p>Votre nom</p>
                <input type="text" name="nom" />
            <input type="submit" value="Valider" />
        </form>
    </div>
    <div>
        <h3>exo 2&4</h3>
        <form method="post" action="user.php"> 
            <p>Votre prénom</p>
                <input type="text" name="prenom" />
            <p>Votre nom</p>
                <input type="text" name="nom" />
            <input type="submit" value="Valider" />
        </form>
    </div>
    <div>
        <h3>exo 5&6&7&8</h3>

        <?php
            $monFichier=pathinfo($_FILES['fichier']['name']);
            $extensionName=$monFichier['extension'];
            $fichierType=array('pdf');
        ?>

        <?php
            function handleClick(){
                echo '</br>Tu t\'appelles '.strip_tags($_POST['prenom']).' '.strip_tags($_POST['nom']).
                ' et ton choix est le '.strip_tags($_POST['choix']).'. Le nom de ton fichier est '.strip_tags($_FILES['fichier']['name']);
            }
        ?>
        
        <?php function rest(){
            ?>
            <form method="post" action="index.php" enctype="multipart/form-data"> 
                <p>Votre prénom</p>
                    <input type="text" name="prenom" />
                <p>Votre nom</p>
                    <input type="text" name="nom" />
                <p>Quel est votre choix ?</p>
                    <select name="choix">
                        <option value="choix1">Choix 1</option>
                        <option value="choix2">Choix 2</option>
                        <option value="choix3" selected="selected">Choix 3</option>
                        <option value="choix4">Choix 4</option>
                    </select>
                <p>Votre fichier</p>
                    <input type="file" name="fichier" />
                <button type="submit" name="btn" value="Valider" action="index.php" method="post">Send</button>
            </form>
        <?php
        };?>

        <?php
            if(isset($_POST['btn'])){
                if((!empty($_POST['prenom'])) && (!empty($_POST['nom'])) && (!empty($_POST['choix'])) && (in_array($extensionName, $fichierType))){
                    handleClick();
                }elseif(!in_array($extensionName, $fichierType)){
                    rest();
                    echo "Ceci n'est pas pas un fichier pdf";
                }else{
                    rest();
                    echo "Remplis tous les champs stp";
                }
            }else {
                rest();
            }
        ?>

    </div>
</div>