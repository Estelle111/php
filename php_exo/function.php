<div id="bloc">
    <h2 id="function">FUNCTION</h2>
    <div>
        <h3>exo 1</h3>
        <?php 
            function booli(){
                return true;
            }
            $dump=booli();
            echo var_dump($dump).'</br>';
        ?>
    </div>
    <div>
        <h3>exo 2</h3>
        <?php 
            function chaine($hello){
                return $hello;
            }
            echo chaine('hello');
        ?>
    </div>
    <div>
        <h3>exo 3</h3>
        <?php 
            function retour($prenom, $nom){
                return $prenom.' '.$nom;
            }
            echo retour(Kiki, Nette);
        ?>
    </div>
    <div>
        <h3>exo 4</h3>
        <?php 
            function nombre($nbr1, $nbr2){
                if($nbr1>$nbr2){
                    echo 'Le premier nombre est plus grand';
                }elseif($nbr1<$nbr2){
                    echo 'Le premier nombre est plus petit';
                }elseif($nbr1==$nbr2){
                    echo 'Les deux nombres sont identiques';
                }
            }
            echo nombre(10, 8);
        ?>
    </div>
    <div>
        <h3>exo 5</h3>
        <?php 
            function two($nbr, $str){
                return $nbr.' '.$str;
            }
            echo two(5, 'poireaux');
        ?>
    </div>
    <div>
        <h3>exo 6</h3>
        <?php 
            function trois($prenom, $nom, $age){
                return 'Bonjour '.$prenom.' '.$nom.', tu as '.$age.' ans.';
            }
            echo trois('Kiki', 'Nette', 7);
        ?>
    </div>
    <div>
        <h3>exo 7</h3>
        <?php 
            function vous($age, $genre){
                if($age>18 && $genre=='homme'){
                    echo 'Vous êtes un homme et vous êtes majeur';
                }elseif($age>18 && $genre=='femme'){
                    echo 'Vous êtes une femme et vous êtes majeure';
                }elseif($age<18 && $genre=='homme'){
                    echo 'Vous êtes un homme et vous êtes mineur';
                }elseif($age<18 && $genre=='femme'){
                    echo 'Vous êtes une femme et vous êtes mineure';
                }
            }
            echo vous(13, 'homme');
        ?>
    </div>
    <div>
        <h3>exo 8</h3>
        <?php 
            function sum($nbr1, $nbr2, $nbr3){
                return $nbr1+$nbr2+$nbr3;
            }
            echo sum(1, 2, 3);
        ?>
    </div>
</div>