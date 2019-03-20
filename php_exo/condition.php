<div id="bloc">
    <h2 id="condition">CONDITIONS</h2>
    <div>
        <h3>exo 1</h3>
        <?php $age1=15; ?>
            <?php if($age1>=18) { ?>
                Vous êtes majeure <br/>
            <?php }else { ?>
                Vous êtes mineure <br/>
            <?php } ?>
    </div>
    <div>
        <h3>exo 2</h3>
        <?php $IsEasy="true";?>
        <?php if($IsEasy="true"): ?>
            c'est facile <br/>
        <?php else: ?>
            c'est difficile <br/>
        <?php endif ?>
    </div>
    <div>
        <h3>exo 3</h3>
        <?php $age='13'; ?>
        <?php $genre='femme'; ?>
            <?php if($age>=18 && $genre=='homme'):?>
                <p>Vous êtes un homme et vous êtes majeur</p>
                <?php elseif($age<=18 && $genre=='homme'): ?>
                    <p>Vous êtes un homme et vous êtes mineur</p>
                <?php elseif($age<=18 && $genre=='femme'): ?>
                    <p>Vous êtes une femme et vous êtes mineure</p>
                <?php elseif($age>=18 && $genre=='femme'): ?>
                    <p>Vous êtes une femme et vous êtes majeure</p>
            <?php endif ?>
    </div>
    <div>
        <h3>exo 4</h3>
        <?php 
            $magnitude=4;
            switch($magnitude){
                case 1:
                    echo 'Micro-séisme impossible à ressentir.';
                    break; 
                case 2:
                    echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                    break; 
                case 3:
                    echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                    break; 
                case 4:
                    echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                    break; 
            }
        ?>
    </div>
    <div>
        <h3>exo 5</h3>
        <?php $genre='femme'; ?>
        <?php if($genre=='femme'):?>
            <p>C'est une développeuse !!!</p>
        <?php else: ?>
                <p>C'est un développeur !!!</p>  
        <?php endif ?>
    </div>
    <div>
        <h3>exo 6</h3>
        <?php $age=19; ?>
        <?php if($age>=18):?>
            <p>Tu es majeure</p>
        <?php else: ?>
            <p>Tu n\'es pas majeure</p>  
        <?php endif ?>
    </div>
    <div>
        <h3>exo 7</h3>
        <?php $var='c\'est ok !!'; ?>
        <?php if($var==false):?>
            <p>c'est ok !!</p>
        <?php else: ?>
            <p>c'est pas bon !!!</p>  
        <?php endif ?>
    </div>
    <div>
        <h3>exo 8</h3>
        <?php $var; ?>
        <?php if($var==true):?>
            <p>c'est ok !!</p>
        <?php else: ?>
            <p>c'est pas bon !!!</p>  
        <?php endif ?>
    </div>
</div>