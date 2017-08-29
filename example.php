<?php
require_once Potracio.php';
use Potracio\Potracio as Potracio;

$pot = new Potracio();
$pot->loadImageFromFile('image.jpg');
$pot->process();

header('Content-type: image/svg+xml');
echo '<?xml version="1.0" standalone="no"?>
   <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" 
   "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">';
echo $pot->getSVG(3);
?>
