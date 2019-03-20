<div id="bloc">
    <h2 id="loop">LOOP</h2>
    <div>
        <h3>exo 1</h3>
        <?php $nbr=0 ?>
        <?php for($i=1; $i<=10; $i++):?>
            <?= $nbr+=1 ?>
        <?php endfor ?>
    </div>
    <div>
        <h3>exo 2</h3>
        <?php $nbr1=0?>
        <?php $nbr2=10?>
        <?php 
            while($nbr1<=20){
                $result=$nbr1*$nbr2;
                $nbr1+=1;
                echo $result.' ';
            }
        ?>
    </div>
    <div>
        <h3>exo 3</h3>
        <?php $nbr1=100?>
        <?php $nbr2=60?>
        <?php 
            while($nbr1>=10){
                $nbr1-=1;
                echo $nbr1*$nbr2.' ';
            }
        ?>
    </div>
    <div>
        <h3>exo 4</h3>
        <?php $i=1?>
        <?php 
            while($i<10){
                $i+=($i/2);
                echo $i.' ';
            }
        ?>
    </div>
    <div>
        <h3>exo 5</h3>
        <?php 
            for($i=1; $i<15; $i++){
                echo "$i \n - On y arrive presque </br>";
            }
        ?>
    </div>
    <div>
        <h3>exo 6</h3>
        <?php 
            for($i=20; $i>0; $i--){
                echo "$i \n -  C'est presque bon </br>";
            }
        ?>
    </div>
    <div>
        <h3>exo 7</h3>
        <?php 
            for($i=1; $i<100; $i=$i+15){
                echo "$i \n -  On tient le bon bout </br>";
            }
        ?>
    </div>
    <div>
        <h3>exo 8</h3>
        <?php 
            for($i=200; $i>0; $i=$i-12){
                echo "$i \n -  Enfin !!!! </br>";
            }
        ?>
    </div>
</div>