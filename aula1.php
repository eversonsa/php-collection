<?php
$musica = new SplFixedArray(2);
$musica[0] = "one direction";
$musica[1] = "the smiths";

$musica->setSize(4); //Aumenta o numero de arrays

$musica[2] = "one direction";
$musica[3] = "the smiths";

echo $musica->getSize(); //pega o numero de arrays

