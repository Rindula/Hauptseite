<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$v = $_POST["vorschlag"];

$conn = new mysqli("localhost", "root", "WQeYt4S8G3", "vorschlaege");
$conn->real_escape_string($v);
$conn->query("SET NAMES utf8");
$conn->query("INSERT INTO vorschlag (vorschlag) VALUES ('$v')");
$conn->close();
header("Location: .");