<?php

session_start();

$colors = array("black_1", "black_2", "red_1", "red_2", "blue_1", "blue_2", "yellow_1", "yellow_2");
$joker = array("black", "red");

$count_colors = 13;
$count_joker = 1;

foreach ($colors as $c) {
    for ($i=0; $i < $ $count_color; $i++) { 
        define($c . "-" . ($i+1), false);
    }
}