<?php
    session_start();
?>
<h2>Infos session</h2>
<pre>
<?php var_dump($_SESSION); ?>
</pre>

<div id="bloc">
    <h2>USER</h2>
    <div>
        <h3>exo 1&3</h3>
        <?php echo 'Tu t\'appelles '.strip_tags($_GET['prenom']).' '.strip_tags($_GET['nom']); ?>
        <p>Si tu veux changer tes données, <a href="form.php">clique ici</a> pour revenir à la page formulaire.php.</p>
    </div>
    <div>
        <h3>exo 2&4</h3>
        <?php echo 'Tu t\'appelles '.strip_tags($_POST['prenom']).' '.strip_tags($_POST['nom']); ?>
        <p>Si tu veux changer tes données, <a href="form.php">clique ici</a> pour revenir à la page formulaire.php.</p>
    </div>
</div>