<?php
    /* session_start(); */
?>
<h2>Debug</h2>
<pre>
<?php var_dump($_SESSION); ?>
</pre>
<form method="post" action="cible.php"> 
    <p>Votre prénom</p>
        <input type="text" name="prenom" />
    <p>Votre mot de passe</p>
        <input type="password" />
    <p>Votre message</p>
        <textarea name="message" rows="8" cols="45"></textarea>
    <p>Quel est votre choix ?</p>
        <select name="choix">
        <option value="choix1">Choix 1</option>
        <option value="choix2">Choix 2</option>
        <option value="choix3" selected="selected">Choix 3</option>
        <option value="choix4">Choix 4</option>
        </select>
    <p>Voulez-vous une fritte ?</p>
        <input type="checkbox" name="case" id="case" /> <label for="case">Fritte</label>
    <p>Aimez-vous la fritte ?</p>
        <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
        <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
    <input type="submit" value="Valider" />
</form>



