<?php

include "Calcul.php"; // inclure la classe Calcul
class CalculTest extends PHPUnit_Framework_TestCase{
// etendre la classe PHPUnit_Framework_TestCase
//    on instancie la classe calcul
public function testDivision(){
$c1=new Calcul(10,2);
//assertEquals =methode qui verifie une egalité entre 2 valeurs
//ici on veut 5 et savoir si la methode $c1->division() fonctionne et donne bien 5 avec 10 et 2
$this->assertEquals(5,$c1->division());
$c2=new Calcul(12,2);
$this->assertEquals(6,$c2->division());
}
}


