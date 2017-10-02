<?php
/* 
 * Les tableaux associatifs sont des dictionnaires de données
 * cle,valeur
 * la clé peut être de n'importe quel type ainsi que la valeur
 */
$tab = array();
/*
 * cle string ,valeur
 */
$tab["php"] = "Langage de script";
$tab["java"] = "Langage compilé pour machine virtuelle";
$tab["vb.net"] = "Langage compilé avec machine virtuelle microS";

//Affichage d'une valeur;
echo $tab["php"];
echo $tab["PHP"];

// Autre definition
$tab = ["php7" => "Langage de script", "vb.net" => "Langage compilé avec machine virtuelle microS"];

echo $tab["php"];
echo $tab["php7"];

// Fonction array keys renvoie la liste des cles
$CLes = array_key($tab);
$Liste = implode(";", $CLes);
echo $Liste;
