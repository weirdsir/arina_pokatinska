<?php

echo "<h1>4th exercise</h1>";

//1

echo "<h3>#1</h3>";

$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
foreach ($courses as $course) {
    echo"<li>$course</li>";
}

//2

echo "<h3>#2</h3>";

$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[1]);
foreach ($courses1 as $course) {
    echo"<li>$course</li>";
}

//3

echo "<h3>#3</h3>";

$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

echo "a) <br>";
asort($courses3);
foreach ($courses3 as $course) {
    echo"<li>$course</li>";
}
echo "<br>";

echo "b) <br>";
ksort($courses3);
foreach ($courses3 as $course) {
    echo"<li>$course</li>";
}
echo "<br>";

echo "c) <br>";
arsort($courses3);
foreach ($courses3 as $course) {
    echo"<li>$course</li>";
}
echo "<br>";

echo "d) <br>";
krsort($courses3);
foreach ($courses3 as $course) {
    echo"<li>$course</li>";
}
echo "<br>";


//4

echo "<h3>#4</h3>";

$courses4=array("php", "html", "javascript", "cms", "project");
foreach ($courses4 as $course) {
    echo strtoupper($course);
    echo "<br>";
}

//5

echo "<h3>#5</h3>";

$colors = array("red", "black", "purple", "mint", "indigo");
for($x = 0; $x < count($colors); $x++) {
    echo $colors[$x];
    echo "<br>";
  }

//6

echo "<h3>#6</h3>";

$colors1 = array("red" => "#660000", "black" => "#000000", "purple" => "#8741bb", "mint" => "##7CD2B3", "indigo" => "#3F0FB7");

foreach($colors1 as $color => $value) {
    echo  $color . ", hex value " . $value;
    echo "<br>";
  }

//7

echo "<h3>#7</h3>";

$month = array("january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december");
foreach($month as $value) {
    echo  $value;
    echo "<br>";
  }

echo "<h3>#8</h3>";

echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

?>