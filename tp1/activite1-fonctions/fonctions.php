<?php
declare(strict_types=1);
function additionner(float $a,float $b):float
{
    return $a+$b;
}
function soustraire(float $a,float $b):float
{
    return $a-$b;
}
function multiplier(float $a,float $b):float
{
    return $a*$b;
}
function diviser(float $a,float $b):float
{
    try {
    if ($b==0) {
        throw new InvalidArgumentException("Division par zéro impossible");
    }
    } catch (InvalidArgumentException $e) {
echo $e->getMessage(); }
    return $a/$b;
}
function estPair(int $n): bool {
    return $n%2 == 0;
}
function estPositif(float $n): bool {
    return $n > 0;
}
function maximum(float $a, float $b, float $c ): float{
    
$max=$a;
if ($b>$max) {
        $max=$b;
    }
    elseif($c>$max){
    $max=$c;
    } 
    return $max;
}
function estPremier(int $n): bool{
    
}








?>
