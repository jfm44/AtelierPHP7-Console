<?php

/*
 * pour creer un fonction utiliser le mot function
 * on peut typer mais ce n'est pas obligatoire
 */
function somme(int $a, int $b):int 
{
    return $a + $b;
}

function sommeB(int $a, int $b): string 
{
    return "\n Le resultat de la somme est : " . strval($a + $b);
}

function sommeNonTypee($a, $b)
{
    return $a + $b;
}

echo somme(1,2);

echo sommeB(2,2);

echo "\n" . sommeNonTypee(3,4);

echo "\n" . sommeNonTypee("coucou",2);

echo "\n" . sommeNonTypee("1",2);

//echo "\n" . somme("coucou",2);

// Le passage de variable se fait par defaut par valeur
function multiplierParDeuxTab(array $tab)
{
    echo "\n===> Debut multiplierParDeuxTab \n";
    for($i=0;$i<count($tab);$i++)
    {
        $tab[$i] = $tab[$i] * 2;
    }
    echo "Fin multiplierParDeuxTab<=== \n";
}

// Ici le passage de variable se fait reference
function multiplierParDeuxTabRef(array &$tab)
{
    echo "\n===>Debut multiplierParDeuxTabRef \n";
    for($i=0;$i<count($tab);$i++)
    {
        $tab[$i] = $tab[$i] * 2;
    }
    echo "Fin multiplierParDeuxTabRef<=== \n";
}

$monTab = [1,2,3,4,5,6];

multiplierParDeuxTab($monTab);
printf ("%s\n ", implode("/", $monTab));

multiplierParDeuxTabRef($monTab);
printf ("%s\n ", implode("/", $monTab));
