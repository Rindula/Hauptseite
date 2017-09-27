<?php

$file = file_get_contents("itpg.lst");

$c1 = explode("\n", $file);
$c2 = array();

foreach ($c1 as $c) {
    $c2[] = explode(";", $c);
}

// c2 Aufbau:
// 0: Name
// 1: Link
// 2: Erklärung (Optional)

foreach ($c2 as $value) {
    echo "<article><a href='".$value[1]."'>".$value[0]."</a><p>".$value[2]."</p></article>";
}