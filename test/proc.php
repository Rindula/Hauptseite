<?php

$m = $_GET["m"];
$r = $_GET["r"];

$m = explode(",", $m);
$r = explode(",", $r);


for ($i=0; $i < count($m); $i++) { 
    $out[] = round(((float)$m[$i] - (float)$r[$i]), 2);
}
echo join(",", $out);
