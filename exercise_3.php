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

echo "<form method=\"post\">
Name: <input type=\"text\" name=\"name\"><br>
Age: <input type=\"text\" name=\"age\"><br>
<input type=\"submit\">
</form>";

if ($_POST["age"] >= 18){
    echo $_POST["name"] . " is eligible for voting.";
}
else {
    echo "Unfortunately, " . $name . " is not eligible for voting.";
}

//5

echo "<h3>#5</h3>";

$a = 8;
while ($a>=1){
    for ($i = 1; $i <= $a; $i++) {
    echo $i;
    }
    echo "<br>";
    $a --;
}

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

echo"<a href=\" https://weirdsir.github.io/Web-development-project/\">Pages link <br></a>";
echo "<a href=\"https://github.com/weirdsir/Web-development-project\">Repository link</a>";

?>