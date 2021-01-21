<?php
class Fizika
{
    public function celsiusToFahrenkeit($stepen){
        // $F= (0°C * 9/5) + 32;
        $F= ($stepen * 9/5) + 32;
        echo "Vo 5 °C ima $F °F!";
    }
    public function fahrenkeitToCelsius($stepen){
        // $C= (32°F - 32) * 5/9;
        $C= ($stepen - 32) * 5/9;
        echo "Vo 5 °F ima $C °C!";
    }
    public function celsiusToKelvin($stepen){ 
        // $K= 0°C + 273.15;
        $K= $stepen + 273.15;
        echo "Vo 5 °C ima $K °K!";;
    }
    public function kelvinToCelsius($stepen){
        // $C= 0K - 273.15;
        $C= $stepen - 273.15;
        echo "Vo 5 °K ima $C °C!";;
    }
    public function kelvinToFahrenkeit($stepen){
        // $F= (0K - 273.15) * 9/5 + 32;
        $F= ($stepen - 273.15) * 9/5 + 32;
        echo "Vo 5 °K ima $F °F!";;
    }
    public function fahrenkeitToKelvin($stepen){
        // $K= (°F - 32) * 5/9 + 273.15;
        $K= ($stepen - 32) * 5/9 + 273.15;
        echo "Vo 5 °F ima $K °K!";;
    }
    public function distance($v,$t){
        //rastojanie
        $S=$v*$t;
        echo "Rastojanieto S = v * t = $v * $t = $S!";
    }
    public function velosity($s,$t){
        //brzina
        $V=$s/$t;
        echo "Brzinata V = s / t = $s / $t = $V!";
    }
    public function time($s,$v){
        $T=$s/$v;
        echo "Vremeto T = s / v = $s / $v = $T!";
    }
}
// $objStepeni = new Fizika();
// $objStepeni -> celsiusToFahrenkeit(5);
// echo "<br>";
// $objStepeni -> fahrenkeitToCelsius(5);
// echo "<br>";
// $objStepeni -> celsiusToKelvin(5);
// echo "<br>";
// $objStepeni -> kelvinToCelsius(5);
// echo "<br>";
// $objStepeni -> kelvinToFahrenkeit(5);
// echo "<br>";
// $objStepeni -> fahrenkeitToKelvin(5);
// echo "<hr>";
// $objStepeni -> distance(5,5);
// echo "<br>";
// $objStepeni -> velosity(20,5);
// echo "<br>";
// $objStepeni -> time(20,4);
// echo "<br>";
?>