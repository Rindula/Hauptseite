<?php

$m = $_GET["m"];
$r = $_GET["r"];

echo $m;
echo $r;

$ma = explode(",", $m);
$ra = explode(",", $r);

print_r($ma);
print_r($ra);

for ($i=0; $i < count($ma); $i++) { 
    $out[] = ($ma[i] - $ra[i]);
}
echo join(",", $out);