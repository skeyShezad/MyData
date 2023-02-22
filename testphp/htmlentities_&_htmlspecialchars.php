<?php
// htmlentities 
$str = " A 'quote' is <b>bold</b>";
echo $str. "<br>";
echo htmlentities($str, ENT_QUOTES)."<br>";
 // in this function does not convert double quote into the entity code
// WITH THE HELP OF secound parameter they function convert all the special character into the 
// entity code
echo htmlentities($str, ENT_NOQUOTES)."<br>";// double or single quode not convert into the entity code 

//htmlspecialchars
$str1 = " A 'quote' is <b>bold</b>";
echo htmlspecialchars($str1)."<br>";  // same work perform as htmlentities

// decode the entities into the special character for htmlentities

$htmllen = htmlentities($str, ENT_QUOTES)."<br>";
echo $htmllen."<br>";
echo html_entity_decode($htmllen);

// decode the entities into the special character for htmlspecialchars
echo htmlspecialchars_decode($htmllen);

// this function is just show for which entity to character given the list
//get_html_translation_table()
echo "<pre>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));
echo "</pre>";
//this function for given the list of special character to entities kist
echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));  
echo "</pre>";
?>