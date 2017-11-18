<?php

//test.php 
//echo "Hello world!!";
//

$phar = new Phar('helloWorld.phar');
$phar->setDefaultStub('test.php');
$phar->addFile('test.php');
