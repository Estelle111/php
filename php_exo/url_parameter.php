<div id="bloc">
    <h2 id="url_parameter">URL_PARAMETER</h2>
    <div>
        <h3>exo 1</h3>
        <a href="index.php?nom=Nemare&prenom=Jean">test 1</a>
        <?php 
            if (isset($_GET['prenom']) AND isset($_GET['nom'])) {
                echo '</br>Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
            }else {// Il manque des paramètres, on avertit le visiteur
                echo '</br>Il faut renseigner un nom et un prénom !';
            }
        ?>
    </div>
    <div>
        <h3>exo 2</h3>
        <a href="index.php?nom=Nemare&prenom=Jean">test 2</a>
        <?php 
            if (isset($_GET['age'])){
                echo $_GET['age'];
            }else {
                echo '</br>Il faut renseigner l\'âge !';
            }
        ?>
    </div>
    <div>
        <h3>exo 3</h3>
        <a href="index.php?dateDebut=2/05/2016&dateFin=27/11/2016">test 3</a>
        <?php 
            if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) {
                echo '</br>Date de Debut: '.$_GET['dateDebut'].'</br>Date de Fin: '.$_GET['dateFin'];
            }else {// Il manque des paramètres, on avertit le visiteur
                echo '</br>Il faut renseigner une date de Debut et une date de Fin !';
            }
        ?>
    </div>
    <div>
        <h3>exo 4</h3>
        <a href="index.php?langage=PHP&serveur=MAMP">test 4</a>
        <?php 
            if (isset($_GET['langage']) AND isset($_GET['serveur'])) {
                echo '</br>Le langage est '.$_GET['langage'].' et le serveur, '.$_GET['serveur'];
            }else {// Il manque des paramètres, on avertit le visiteur
                echo '</br>Il faut renseigner le langage et le serveur !';
            }
        ?>
    </div>
    <div>
        <h3>exo 5</h3>
        <a href="index.php?semaine=12">test 5</a>
        <?php 
            if (isset($_GET['semaine'])){
                echo '</br>Semaine: '.$_GET['semaine'];
            }else {// Il manque des paramètres, on avertit le visiteur
                echo '</br>Il faut renseigner la semaine !';
            }
        ?>
    </div>
    <div>
        <h3>exo 6</h3>
        <a href="index.php?batiment=12&salle=101">test 5</a>
        <?php 
            if (isset($_GET['batiment']) AND isset($_GET['salle'])) {
                echo '</br>Batiment: '.$_GET['batiment'].'</br> Salle: '.$_GET['salle'];
            }else {// Il manque des paramètres, on avertit le visiteur
                echo '</br>Il faut renseigner le batiment et la salle !';
            }
        ?>
    </div>
</div>