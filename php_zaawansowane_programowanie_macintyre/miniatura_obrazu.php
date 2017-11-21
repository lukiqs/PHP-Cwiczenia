<?php
//tworzenie mianiatur
 
$nazwaObrazu = "1.png";
$nazwaMiniatury = "min1.png";
$metaDane = getimagesize($nazwaObrazu);
$obraz = "";
$nowaSzerokosc = 200;
$nowaWysokosc  = $metaDane[1]/($metaDane[0]/$nowaSzerokosc);

switch ($metaDane['mime']){
    
    case 'image/jpeg':
        $obraz = imagecreatefromjpeg($nazwaObrazu);
        break;
    
    case 'image/png':
        $obraz = imagecreatefrompng($nazwaObrazu);
        break;
    
    case 'image/gif':
        $obraz = imagecreatefromgif($nazwaObrazu);
        break;
    
    case 'image/wbmp':
        $obraz = imagecreatefromwbmp($nazwaObrazu);
        break;
}

if($obraz){
    $miniatura = imagecreatetruecolor($nowaSzerokosc, $nowaWysokosc);
    imagecopyresampled($miniatura, $obraz, 0, 0, 0, 0, $nowaSzerokosc, $nowaWysokosc, $metaDane[0], $metaDane[1]);
    imagepng($miniatura,$nazwaMiniatury);
    imagedestroy($miniatura);
}

