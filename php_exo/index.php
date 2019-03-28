<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>php_exo</title>
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <ul>
                    <li><a href="#variable">Variable</a></li>
                    <li><a href="#condition">Condition</a></li>
                    <li><a href="#loop">Loop</a></li>
                    <li><a href="#function">Function</a></li>
                    <li><a href="#array">Array</a></li>
                    <li><a href="#url_parameter">Url_parameter</a></li>
                    <li><a href="#form">Form</a></li>
                    <li><a href="#cookies&sessions">Cookies</a></li>
                </ul>
            </div>
            <a href="bonjour.php?nom=Nette&amp;prenom=Kiki&amp;repeter=">Dis-moi bonjour !</a>
            <?php
            ?>
            <?php require 'variable.php'?>
            <?php require 'condition.php'?>
            <?php require 'loop.php'?>
            <?php require 'function.php'?>
            <?php require 'array.php'?>
            <?php require 'url_parameter.php'?>
            <?php require 'form.php'?>
            <?php require 'cookies&sessions.php'?>
        </div>
    </body>
</html>