<?php

$a = "toto";

switch ($a)
{
    case "titi" :
        echo 1;
        break;
    
    case "tutu" :
        echo 2;
        break;
    
    case "tata" :
        echo 3;
        break;
    
    default :
        echo 0000000;
        break;
}

//boucle for classique
$tab = array();
for ($i=0;$i<10;$i++)
{
   $tab[$i] = $i * 10 ;
}
printf("\n Contenu du tableau chargé : \n");
printf(" %s",implode("/",$tab));

//foreach
printf("\n\n Contenu du tableau chargé avec FOREACH : ");
$index = 0;
foreach ($tab as $valCourante) {
    printf("\n valeur de %d : %d",$index,$valCourante);
    $index ++;
}
    
//precondition
$a = 0;
while($a<10)
{
    $a++;
}

//postcondition
$a = 0;
do{
    $a++;
}while ($a<10);