<?php
/**
 * Created by PhpStorm.
 * User: petwise
 * Date: 11/22/13
 * Time: 4:22 PM
 */
include('./includes/header.inc');
include('./includes/navbar.inc');

$address = "4002+Beechwood+Drive+Columbia,MO";
$first = "http://maps.googleapis.com/maps/api/staticmap?center=";
$last = "&zoom=14&size=128x128&sensor=false&maptype=roadmap&markers=color:blue%7Clabel:Driven+Design%7C38.990442,-92.249418";
//echo $address;

$image = $first . $address . $last;
//require './lib/Tile.php';

//$connection = new Connection('bf480c0f75fa4c448a8a863de69481c1');

//$tile = cm_get_tile($connection, 38.990442, -92.249418, 15, 1, 256);

//echo $tile;

//$f = fopen('file.png', 'w+');
//fprintf($f, '%s', $tile);
//fclose($f)


?>


<? include('./includes/footer.inc') ?>
