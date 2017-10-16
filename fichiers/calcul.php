<?php
class Calcul{
private $_nbr1;
private $_nbr2;
public function __construct($x,$y){
$this->_nbr1 = $x;
$this->_nbr2 = $y;
}
public function division(){
return ($this->_nbr1)/($this->_nbr2);
}
}


