<?php
/* VARIABLES */

/* $note = 10;
$note2 = 15;
$nom = 'Estelle';
echo ($note + $note2) / 2; */

/* $prenom = 'Penelope';
$nom = ' Bruce';
echo "$prenom $nom \n"; */

/* $prenom = 'Kiki';
$nom = 'Nette';
$note1 = 10;
$note2 = 20;
$moyenne = ($note1 + $note2) / 2;
echo 'Bonjour ' . $prenom . ' ' . $nom . ', vous avez' . $moyenne . ' de moyenne';
echo "Bonjour $prenom $nom vous avez $moyenne de moyenne \n"; */


/* TABLEAUX */

/* $eleve = [
    'nom' => 'Nette', 
    'prenom' => 'Kiki',
    'notes' => [10, 20, 15]
];
$eleve['prenom'] = 'Poupou';
$eleve['notes'][] = 16;
echo $eleve['prenom'].' '.$eleve['nom']
print_r($eleve['notes']); */

/* CONDITIONS */

/* $action = (int)readline('Entrez votre action : 
(1: attaquer, 2:défendre, 3: passer mon tour');
if($action === 1) {
    echo 'J\'attaque !';
}elseif($action === 2) {
    echo 'Je défends';
}elseif($action === 3) {
    echo 'Je passe';
} */

/* BOUCLES */

/*$nbr = null;
while ($nbr !== 10) {
    $nbr = (int)readline('Entrez un nbr:');
}
echo 'Bravo'; */

/* $notes = [10, 20, 15];
$eleves = [
    'cm1' => 'Jean',
    'cm2' => 'Marc'
];

foreach ($eleves as $classe => $eleve) {
    echo "$eleve est dans la classe $classe \n";
} */

/* $eleves = [
    'cm1' => ['Jean', 'Jo', 'Jane'],
    'cm2' => ['Marc', 'Mike', 'Mortifère']
];
foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe: \n";
    foreach ($listEleves as $eleve) {
        echo "-$eleve\n";
    }
    echo "\n";
} 
?> */

//FUNCTIONS

// var_dump()
echo var_dump(1234).'\n';
echo var_dump(123.4).'\n';
echo var_dump('kayak').'\n';

//strtolower()
//strrev()
$mot = 'kayak';
$mot = 'Kayak';
$reverse = strtolower(strrev($mot));
if (strtolower($mot) === $reverse) {
    echo "palyndrome \n";
}else {
    echo "no palyndrome \n";
}

//array_sum ()
//count()
//round()
//print_r()
//array_push()
//array_reverse()
//sort() => booleen
// ====> function & = fonctions mutables
//= elles modifient le comportement des variables
$notes=[10, 20, 13];
$notes[]=16;
$noteReversed = array_reverse($notes);
$noteSort = sort($notes);
print_r ($noteSort.'\n');
print_r ($noteReversed);
echo '\n'.array_push($notes, 18, 45).'\n';
echo var_dump($notes).'\n';
echo round(array_sum ($notes) / count($notes), 2).'\n';
// & de référence => relie les deux variables. 
//Chgmts appliqués aux deux.
$notes1=[30, 45, 13];
$notes2=&$notes1;
$notes2[]=10;
var_dump($notes1, $notes2);

//exit() = condition s'arrête s'il n'y a pas de mot = die()
while(true){
    $mot = 'kayak';
    if($mot === '') {
        exit('fin du programme');
    }
    $reverse = strtolower(strrev($mot));
    if(strtolower($mot)===$reverse) {
        echo "palyndrome \n";
    }else {
        echo "no palyndrome \n";
    }
    break;
}

//filtre insultes
//str_replace()
//strlen()= taille chaine de caractere
//str_repeat = répète une chaine
$insultes = ['merde', 'con'];
$phrase = 'Gros con de merde';
foreach($insultes as $insulte){
    $replace = str_repeat('*', strlen($insulte));
    $phrase = str_replace($insulte, $replace , $phrase);
}
echo "$phrase \n";

//Manière différente:
$insultes = ['merde', 'con'];
$asterisque = [];
foreach($insultes as $insulte){
    $asterisque[] = str_repeat('*', strlen($insulte));
}
$phrase = 'Gros con de merde';
$phrase = str_replace($insultes, $asterisque, $phrase);
echo "$phrase \n";

//Premières lettres affichées:
//substr() = retourne un segment de chaine
$insultes = ['merde', 'con'];
$asterisque = [];
foreach($insultes as $insulte){
    //Trouver la premiere lettre du mot / 1 = 1lettre
    $lettre = substr($insulte, 0, 1);
    //Trouver la taille du mot -1
    $asterisque[] = $lettre.str_repeat('*', strlen($insulte) -1);
}
$phrase = 'Gros con de merde';
$phrase = str_replace($insultes, $asterisque, $phrase);
echo "$phrase \n";


//USER FUNCTIONS
$nom="Nette";
function bonjour($prenom=null, $nom=null) {
    if($prenom===null) {
        return "Bonjour Lovelace\n";
    }
    return "Bonjour $prenom $nom \n";
}
$salut=bonjour('Kiki', $nom);
echo $salut;
echo bonjour();


//function answer_yes_no() 
function answer_yes_no($phrase) {
    while(true) {
        $answer = readline($phrase." - (y)es/(n)o");
        if($answer==='y'){
            return true;
        }elseif($answer==='n'){
            return false;
        }
    } 
}
$result = answer_yes_no("Do you keep going ?");
var_dump($result); 


//prompt function
/* function prompt($prompt_msg){
    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");
    $answer = "<script type='text/javascript'> document.write(answer); </script>";
    return($answer);
}
//program
$prompt_msg = "Please type your name.";
$name = prompt($prompt_msg);

$output_msg = "Hello there ".$name."!";
echo($output_msg); 
*/

//demander_creneau()
function demander_creneau($phrase= 'Veuillez entrer votre creneau'){
    echo "$phrase \n";
    while(true) {
        $ouverture = (int)readline('Heures d\'ouverture:');
        if($ouverture >= 0 || $ouverture <= 23) {
            break;
        }
    }
    while(true) {
        $fermeture = readline('Heures de fermeture:');
        if($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture) {
            break;
        }
    }
    return [$ouverture, $fermeture];
}
$creneau1 = demander_creneau();
$creneau2 = demander_creneau('Veuillez entrer votre creneau');
var_dump($creneau1, $creneau2);

/* function demander_creneaux($phrase= 'Veuillez entrer vos creneaux')
$creneaux = demander_creneaux('Entrez vos creneaux')
var_dump($creneaux);
*/


?> 

