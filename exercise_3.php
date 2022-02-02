<?php

echo "<h1>3rd exercise</h1>";

//1

echo "<h3>#1</h3>";

$month = date("F");
if ($month == "August") {
    echo "It's August, so it's still holiday.";
}
else {
    echo "Not August, This is " .$month. " so i don't have any holidays";
}

//2

echo "<h3>#2</h3>";

$color = "purple";

if ($color == "red"){
    echo "The color is red.";
}
else {
    echo "The color is not red.";
}

//3

echo "<h3>#3</h3>";

$score =64;

if ($score > 80) {
    echo "Excellent";
}
elseif ($score > 70 and $score < 80) {
    echo "Great";
}
elseif ($score > 60 and $score < 70) {
    echo "Good";
}
elseif ($score > 50 and $score < 60) {
    echo "Pass";
}
else {
    echo "Fail";
}

//4

echo "<h3>#4</h3>";

//5

echo "<h3>#5</h3>";

$numbers = array(1,2,3,4,5,6,7,8);

//6

echo "<h3>#6</h3>";

$a = 1;
while ($a<8){
    for ($i = 1; $i <= $a; $i++) {
    echo "*";
    }
    echo "<br>";
    $a ++;
}

//7

echo "<h3>#7</h3>";


?>