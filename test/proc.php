<?php

$m = $_GET["m"];
$r = $_GET["r"];

$ma = explode(",", $m);
$ra = explode(",", $r);

for ($i=0; $i < count($ma); $i++) { 
    $out[] = ($ma[i] - $ra[i]);
}
echo join(",", $out);