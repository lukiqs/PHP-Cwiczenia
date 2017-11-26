<?php

//MD5 

$ciag = uniqid(mt_rand());
$haslo = md5($wprowadzone_haslo);
$silniejszehaslo = md5($haslo.$ciag);

//SHA2

$ciag = "twoje haslo";
$sha2_32bit = hash('sha256', $ciag);
$sha2_64bit = hash('sha512', $ciag);

