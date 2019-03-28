<?php 
session_start(); //vers user
//exo 3
if (!empty($_POST['nom']) && !empty($_POST['password'])){
    setcookie('user', $_POST['nom']);
    setcookie('password', $_POST['password']);
    $nom = $_POST['nom'];
    $password = $_POST['password'];
}
?>

<h2>Cookie & Session</h2>

<h3>exo 1</h3>
<?php 
    $useragent = $_SERVER ['HTTP_USER_AGENT'];
    echo "Votre User Agent : " . $useragent."</br>";
    echo "Votre adresse IP: ". $_SERVER['REMOTE_ADDR']."</br>";
    echo "Votre serveur : " . $_SERVER['SERVER_NAME']."</br>";
?>

<h3>exo 2</h3>
<?php 
    $_SESSION['utilidateur'] = [
        'prenom' => 'John',
        'nom' => 'Doe',
        'age' => 102,
    ]; 
?>
<a href="user.php">Lien vers informations sur user</a>

<h3>exo 3</h3>

<?php if (isset($nom) && isset($password)): ?>
    Ton nom est <?= $nom ?> et ton mot de passe est <?= $password ?>;
<?php else: ?>
    <form action="" method="post"> 
        <input type="text" name="nom" placeholder="login" />
        <input type="password" name="password" placeholder="password"/>
        <button type="submit" name="button">send</button>
    </form>
<?php endif; ?>