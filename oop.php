<?php
//includovani potrebnych rozhrani a trid
include ('interfaceKozena.php');
include ('ustrednyKozena.php');
include ('ustrednaKozena.php');

//inicializace tridy
$test = new ustrednaKozena;
//var_dump($test::TYPE);
//ulozeni hodnoty pomoci tridni konstanty
$test->setNapetiKozena($test::TYPE);
//ziskani hodnoty pomoci tridni funkced get
var_dump ($test->getNapetiKozena());

?>           