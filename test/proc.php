<?php

$m = $_GET["m"];
$r = $_GET["r"];

$m = explode(",", $m);
$r = explode(",", $r);

for ($i=0; $i < count($m); $i++) { 
    $out[] = ((float)$m[i] - (float)$r[i]);
    echo ((float)$m[i] - (float)$r[i]);
}
echo join(",", $out);