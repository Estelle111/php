<div id="bloc">
    <h2 id="array">ARRAY</h2>
    <div>
        <h3>exo 1 & 2</h3>
        <?php 
            $mois = [
                'janvier', 
                'février', 
                'mars',
                'avril', 
                'mai', 
                'juin', 
                'juillet', 
                'aout',
                'septembre', 
                'octobre', 
                'novembre', 
                'décembre'
            ];
            echo $mois[2].' ';
            echo $mois[5].' ';
            $mois[7]='août';
            echo $mois[7].' ';
        ?>
    </div>
    <div>
        <h3>exo 3</h3>
        <?php 
            $departements=[
                01 => 'Ain', 
                03 => 'Allier',
                07 => 'Ardèche',  
                15 => 'Cantal', 
                26 => 'Drôme', 
                38 => 'Isère',
                42 => 'Loire',
                43 => 'Haute-Loire',
                63 => 'Puy-de-Dôme',
                69 => 'Rhône',
                73 => 'Savoie',
                74 => 'Haute-Savoie'
            ];
            echo $departements[69].' ';
            array_push ($departements, $departements[64] = 'Metz');
            echo $departements[64].'</br>';

            foreach($departements as $key => $value){
                echo 'Le département '.$value.' a le numéro '.$key.'.</br>';
            }
        ?>
    </div>
    <div>
        <h3>exo 4</h3>
        <?php 
            $nom = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
            foreach($nom as $value)
            echo 'Salut '.$value.', devine quoi ! Je me marie dans deux semaines ! J\'espère te compter parmi les invités ! Gros bisous :)</br>'
        ?>
    </div>
    <div>
        <h3>exo 5</h3>
        <?php 
            $classe=[
                'Patrick' => 13, 
                'Polo' => 15,
                'Gertrude' => 19,  
                'Philippe' => 10, 
                'Marie' => 11, 
            ];
            $total = 0;
            $max = 0;
            $proche = reset($classe);
            $min = reset($classe);
            foreach($classe as $key => $value){
                echo $key.' a eu '.$value.'/20.</br>';
                if($value>=$max){
                    $max = $value;
                    $maxPerson = $key;
                }   
                if($value<=$min){
                    $min = $value;
                    $minPerson = $key;
                }  
                $total+=$value;
                $moyenne=$total/count($classe); 
            }
            foreach($classe as $key => $score){
                $diff=$moyenne-$score;
                if($diff<0){
                    $diff = $diff*-1;
                }
                if($proche>=$diff){
                    $proche = $diff;
                    $personProche = $key;
                }
            }
            echo $maxPerson.' a eu le plus grand score avec '.$max.'.</br>';
            echo $minPerson.' a eu le plus petit score avec '.$min.'.</br>';
            echo 'La moyenne est de '.$moyenne.'.</br>'; 
            echo 'La personne la plus proche de la moyenne est '.$personProche.' avec '.$proche.' de différence.';
        ?>
    </div>
    
