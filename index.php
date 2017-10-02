<?php
/* ctrl-shift-c pour commenter le source selectionner */
//ligne1
//ligne2

/* les variables ne sont pas typées pas déclarées
 * 
 */
$a = "texte test";

// affichage de $a
echo $a;
echo "\n";

// afficher le type d'une variable.
echo gettype($a);

// ou printf
$printf = printf("\nla variable \$a la valeur %s et est de type %s \n",$a, gettype($a));

// le point est le caractere de concartenation
echo 'coucou' . " " . "jf";

// Mise en majuscule pour metre en evidence 
$printf = printf("\nla variable \$a la valeur %s et est de type %s \n",$a, strtoupper(gettype($a)));

// Les variables peuvent changer de type !!!!!!
$printf = printf("\n%s", strtoupper("Les variables peuvent changer de type !!!!!!"));
$a  =152;
$printf = printf("\nla variable \$a la valeur %s et est de type %s \n",$a, strtoupper(gettype($a)));
$a  =TRUE;
$printf = printf("\nla variable \$a la valeur %s et est de type %s \n",$a, strtoupper(gettype($a)));
$a  =1.365;
$printf = printf("\nla variable \$a la valeur %s et est de type %s \n",$a, strtoupper(gettype($a)));

// erreur non bloquante
$printf = printf("\n%s", strtoupper("erreur non bloquante!!"));
$printf = printf("\nla variable \$a la valeur %s et est de type %s \n",$b, strtoupper(gettype($a)));
$printf = printf("\n%s", strtoupper("....  le script ne s'est pas arrté"));

// Substitution
$printf = printf("\n%s", strtoupper("Substitution"));
$a = "valeur de a";
$b = '-------$a------';
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));
$printf = printf("\n%s", strtoupper("Cela n'a pas fonctionné car b est déclaré avec de simples quotes"));
$a = "valeur de a";
$b = "------$a------";
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));

// OPERATIONS
$printf = printf("\n%s\n", strtoupper("Operations"));
$a = 10;
$b = 20;
echo $a + $b;
$printf = printf("\n%s", "Il fait l'operation tout seul");

$a = 10;
$b = "atchoum";
echo $a + $b;
$printf = printf("\n%s", strtoupper("Seul un warning est levé !!!!"));

//CONVERSIONS
$printf = printf("\n%s", strtoupper(".... les conversions ....."));
$a = TRUE;
$printf = printf("\nla variable \$a la valeur %s et est de type %s \n",$a, strtoupper(gettype($a)));
$b = "";
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));        
$b = $a;
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));        
$b = boolval($a);
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));        
$b = strval($a);
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));        
$a = 2.628;
$printf = printf("\nla variable \$a la valeur %s et est de type %s \n",$a, strtoupper(gettype($a)));
$b = strval($a);
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));        
$b = $a;
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));        
$b = boolval($a);
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));        
$b = (boolean) $a;
$printf = printf("\nla variable \$b la valeur %s et est de type %s \n",$b, strtoupper(gettype($b)));        

