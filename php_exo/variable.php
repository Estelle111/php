<!-- exo1 -->
<?php 
    $nom='Nette';
    $prenom='Kiki';
    $age='7';
?>

<div id="bloc">
    <h2 id="variable">VARIABLES</h2>
    <div>
        <h3>exo 1</h3>
        <?= "Bonjour $prenom, 
            enfant de la famille $nom 
            ayant atteint de level $age ! <br />"; ?>
    </div>
    <div>
        <h3>exo 2</h3>
        <?php
            $km=1;
            echo "$km \n";
            $km=3;
            echo "$km \n";
            $km=125;
            echo "$km <br/>";
        ?>
    </div>
    <div>
        <h3>exo 3</h3>
        <?php
            $string='kiki';
            $string_value_of_string = strval($string);
            echo "$string_value_of_string \n"; 

            $int = '7';
            $int_value_of_int = intval($int);
            echo "$int_value_of_int \n"; 

            $float = '2.5';
            $float_value_of_float = floatval($float);
            echo "$float_value_of_float \n"; 

            $bool = 'true';
            $bool_value_of_bool = boolval($bool);
            echo "$bool_value_of_bool <br/>"; 
        ?>
    </div>
    <div>
        <h3>exo 4</h3>
        <?php
            $nbr=null;
            echo "$nbr\n";
            $nbr=5;
            echo "$nbr<br/>";
        ?>
    </div>
    <div>
        <h3>exo 5</h3>
        <?php
            $sum=(3+4);
            $multi=(5*20);
            $divi=(45/5);
            echo "$sum $multi $divi <br/>";
        ?>
    </div>
    <div>
        <h3>exo 6</h3>
        <?php
            $base=785;
            $nvx=(785 * (30/100));
            echo "$nvx \n";
            echo ($base - $nvx)."<br/>";
        ?>
    </div>
</div>