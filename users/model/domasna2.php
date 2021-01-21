<?php
require_once "fizika.php";
$objStepeni = new Fizika();
$objStepeni -> celsiusToFahrenkeit(5);
echo "<br>";
$objStepeni -> fahrenkeitToCelsius(5);
echo "<br>";
$objStepeni -> celsiusToKelvin(5);
echo "<br>";
$objStepeni -> kelvinToCelsius(5);
echo "<br>";
$objStepeni -> kelvinToFahrenkeit(5);
echo "<br>";
$objStepeni -> fahrenkeitToKelvin(5);
echo "<hr>";
$objStepeni -> distance(5,5);
echo "<br>";
$objStepeni -> velosity(20,5);
echo "<br>";
$objStepeni -> time(20,4);
echo "<br>";
?>