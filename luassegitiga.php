<!DOCTYPE html>
<h3>Menghitung Keliling dan luas Persegi Panjang</h3>
<?php
$rumus_keliling = "(panjang x 2) + (lebar X 2)";
$rumus_luas = "panjang x lebar";
$panjang = 10;
$lebar = 15;

// menghitung nya
$keliling = ($panjang * 2) + ($lebar *2);
$luas = ($panjang * $lebar);

echo "Rumus untuk menghitung keliling persegi panjang adalah : $rumus_keliling. <br>";
echo "Rumus untuk menghitung luas persegi panjang adalah : $rumus_luas. <br><br>";
echo "Persegi panjang yang memiliki lebar : $lebar, dan panjang : $panjang, maka : <br>";
echo "Keliling : $keliling <br>";
echo "Luas : $luas <br>";
?>