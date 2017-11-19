<?php
//you can download https://code.google.com/archive/p/gchartphp/downloads
// google chart lib

error_reporting(E_ALL);
require_once 'GChartPhp/gChart.php';

$q = new gQRCode();
$q->setQRCode("Cwiczenia z PHP - tworzenie kodow QR");
echo "<br><br><br><br><center> <img src='{$q->getUrl()}' />";

