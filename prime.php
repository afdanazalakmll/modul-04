<?php
$i=17;
$counter = 0;
for ($j=1; $j<=$i;$j++) { //semua kemungkinan faktor pembagi 
//jika angka yg akan dicek habis dibagi faktor pembagi, counter nya +1 
    if ($i % $j==0) {
        $counter++;
    }
}

//faktor habis bagi nya harus 2, 1 dan bilangan itu sendiri
if($counter ==2) {
print $i." is Prime <br/>";
} else{
    print $i." is not Prime <br/>";
}

$i=35;
$counter = 0;
for ($j=1; $j<=$i;$j++) { //semua kemungkinan faktor pembagi 
//jika angka yg akan dicek habis dibagi faktor pembagi, counter nya +1 
    if ($i % $j==0) {
        $counter++;
    }
}

//faktor habis bagi nya harus 2, 1 dan bilangan itu sendiri
if($counter ==2) {
print $i." is Prime <br/>";
} else{
    print $i." is not Prime <br/>";
}
?>