<?php

// Les Tableaux
$printf = printf("\n%s", strtoupper(".... les tableaux definis avec array ....."));
$a = array();
$printf = printf("\nla variable \$a est de type %s \n", strtoupper(gettype($a)));
$printf = printf("sa taille est %d \n", strtoupper(count($a)));
$printf = printf("\ndefinir aun tableau \$a[]=123...");
$a[]=123;

$printf = printf("\nla variable \$a la valeur %s et est de type %s \n",$a, strtoupper(gettype($a)));
$printf = printf("sa taille est %d \n",$a, strtoupper(count($a)));
echo $a[0];
$printf = printf("\nla 2de position contient %d \n",$a[0]);
$a[]=1;
$a[]=2;
$a[]=3;
$printf = printf("\nla variable \$a est de type %s \n", strtoupper(gettype($a)));
$printf = printf("sa taille est %d \n",$a, strtoupper(count($a)));
echo $a[0];
$printf = printf("\nla 1re position contient %d \n",$a[0]);

// summ tableaux
$printf = printf("\n%s", strtoupper(".... les tableaux definis avec array 1,2,3  \"totot\",\"titi\",\"tata\".....\n"));
echo "==============\n";
$a[]= array();
$a[]= 1;
$a[]= 2;
$a[]= 3;
$b[] = "toto";
$b[] = "titi";
$b[] = "tata";
$res = array_sum($a);
echo $res;
$printf = printf("\nla variable \$res somme des valeurs de a la valeur %d et est de type %s \n",$res, strtoupper(gettype($res)));
echo "==============\n";
echo "taille " . strval(count($a)) . "\n";
/*foreach ($a as $value) {
    echo $value . "\n";
}
*/
$rimplode = implode("/", $b);
echo $rimplode . "\n";

// EXO2
$a=[1,2,1,3,4,4,5];
$rimplode = implode("/", $a);
echo $rimplode . "\n";
$b=[3,4,4,5,6,7,7];
$rimplode = implode("/", $b);
echo $rimplode . "\n";

$resultat = array_intersect($b, $a);
$rimplode = implode("/", $resultat);
echo "resultat intersect a b : " . $rimplode . "\n";

$resultat = array_sum($a);
echo "resultat sum : " . $resultat . "\n";

$resultat = array_diff($b, $a);
$rimplode = implode("/", $resultat);
echo "resultat diff a b : " . $rimplode . "\n";

$resultat = array_merge($a, $b);
$rimplode = implode("/", $resultat);
echo "resultat merge a b : " . $rimplode . "\n";

sort($resultat);
$rimplode = implode("/", $resultat);
echo "resultat tri suite au merge a b : " . $rimplode . "\n";
