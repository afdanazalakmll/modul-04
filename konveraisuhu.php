<!DOCTYPE html>
<html>
<title> konversi suhu </title>
<head>
    <body bg color="cyan">
        <h1>Mengkonversi SUhu Celcius ke Fahrenheit dan Reamur</h1>

<?php
$celcius = 30;
$fahrenheit=1200;
$reamur = 150;

//rumus
$celciuskereamur = 0.8*$reamur;
$celciuskefahrenheit = $celcius*1.8+32;
$fahrenheitkereamur=0.44*($fahrenheit-32);
$fahrenheitkecelcius=($fahrenheit-32)/1.8;
$reamurkecelcius=1.25*$reamur;
$reamurkefahrenheit=(2.25*$reamur)+32;

echo"suhu $celcius C<br>";
echo"jika di konfersikan ke reamur = $celciuskereamur<br>";
echo"jika dikonfersikan ke fahrenheit=$celciuskefahrenheit<p>";
echo"suhu $fahrenheit F<br>";
echo"jika di konfersikan ke reamur = $fahrenheitkereamur<br>";
echo"jika dikonfersikan ke celcius=$fahrenheitkecelcius<p>";
echo"suhu $reamur R<br>";
echo"jika di konfersikan ke celcius = $reamurkecelcius<br>";
echo"jika dikonfersikan ke fahrenheit=$reamurkefahrenheit<p>";
?>
</body>
</html>