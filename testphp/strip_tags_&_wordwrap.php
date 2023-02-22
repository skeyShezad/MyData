<?php
//strip_tag():
$str = "Hello <b>World</b>, Heloo <i>Earth</i>";
echo "this is a normal string with tag : ".$str. "<br>";
echo "remove the tags with strip_tag() : ".strip_tags($str, "<b>")."<br>";

// wordwrap()
$str1 = "this world is beautiful";
echo "wordwrap for break string : ".wordwrap($str1, 4, "<br>", true);
?>