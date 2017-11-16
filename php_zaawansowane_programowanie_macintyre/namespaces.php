<?php
require_once 'lib_namespaces.php';

$a = new zwierze\domowe\zwierze();
echo $a->getType();
$b = new zwierze\dzikie\zwierze();
echo $b->getType();

use zwierze\dzikie\zwierze as bestia;
$c = new bestia();
echo $c->getType();

