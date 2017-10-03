<?php

/*
 * Fonction factorielle
 */
/**
 * Calcul de la factorielle du parametre pEntree
 * @param int $pEntree Le nombre entier dont on calcule la factorielle
 * @return int Le résultat
 * @throws Exception
 * 
 */
function factorielle(int $pEntree):int
{
    if ($pEntree > 0)
    {
        $res = $pEntree;
        for ($i=$pEntree-1;$i>0;$i--)
        {
            $res = $res * $i;
        }
    }
    else 
    {
        if ($pEntree == 0)
        {
            $res = 1;
        }
        else 
        {
            //$res = -1;
            throw new Exception("Erreur Le parametre de la factorielle est négatif");
        }
    }
    return $res;
}

/**
 * Factorielle algo recurssif
 * @param int $pEntree
 * @return int
 */
function factorielleRec(int $pEntree):int
{
    if ($pEntree <= 0)
    {
        return 1;
    }
    return $pEntree * factorielleRec($pEntree-1);
}


for ($j=-1;$j<10;$j++)
{
    try 
    {
        printf ("factorielle de %d = %d\n ",$j, factorielle($j));
    } 
    catch (Exception $e) 
    {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }   
}
printf("\n");

for ($j=-1;$j<10;$j++)
{
    try 
    {
        printf ("factorielle de %d = %d\n ",$j, factorielleRec($j));
    } 
    catch (Exception $e) 
    {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }   
}
