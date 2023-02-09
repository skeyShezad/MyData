<?php
// $color = array  ("red", 3, "blue", 4);
$color = ["red", 3, "blue", 4]; //secound method to declare array

// echo $color[0]."<br>";
// echo $color[1]."<br>";
// echo $color[2]."<br>";
// echo $color[3]."<br>";

//special function in array print_r for testing perpose

// echo "<pre>"; // pre tag for formatting 

// print_r($color);

// echo "</pre>";

// third method for each loop for declare array 
echo "<ul>";
for($i=0; $i < 4; $i++){
echo "<li> $color[$i].</li>";
}
echo "</ul>";

?>