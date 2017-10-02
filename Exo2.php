<?php

/* 
 * Liste des pay et capitales
 *  Trouver la capitale de la jamaique
 *  Afficher la liste des pays par ordre alphabetique sans faire de boucle
 *  Afficher la liste des capitales  par ordre alphabetique sans faire de boucle
 */

$pays = ["Jamaique" => "Kingstone", "Cuba" => "La Havanne", "Madagascar" => "Antananarivo"];

// La capitale de la Jamaique
printf("\nla capitale de la jamaique est %s \n\n",strtoupper($pays["Jamaique"]));


printf("\nTri des pays\n");
$listePays = array_keys($pays);
$rep = implode(";",$listePays);

echo "Avant : " . $rep . "\n";

sort($listePays);
$rep = implode(";",$listePays);
echo "Apres : " . $rep . "\n\n";

printf("\nTri des capitales\n");
$ListeCap = array_values($pays);
$rep = implode(";",$ListeCap);
echo "Avant : " . $rep . "\n";

sort($pays);
$rep = implode(";",$pays);
echo "Apres : " . $rep . "\n";
