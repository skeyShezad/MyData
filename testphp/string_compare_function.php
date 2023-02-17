<?php
// strcmp given the 3 parameters means 0 is compare , 1 means first
//parameters greater than secound and last negative means secound 
// parameter greater then first parameters 
echo "strcmp :".strcmp("Hello", "Hello"). "<br>";

// some time we compare some spacefie character so we can use 
// strncmp n means length
echo "strncmp :".strncmp("Hello world", "hello world", 6). "<br>";

// compare for word or character for case insensitive
echo "strcasecmp :".strcasecmp("HELLO world", "hello world"). "<br>";

// WE CAN Compare perticular length so add strncasecmp 
echo "strncasecmp :".strncasecmp("HELLO world", "hello world", 5). "<br>";
// strnatcmp for natural algorithem compare also number
echo "strnatcmp : ". strnatcmp("2hELLO world", "10hello world"). "<br>";

//strnatcasecmp for case insensitive
echo "strnatcasecmp : ". strnatcasecmp("2hELLO world", "2hello WORLD"). "<br>";

//substr_compare for particular character in middle compare
// compare 6 index number to remaining all  
echo "substr_compare : ". substr_compare("hello shezad", "shezad", 6, 4 ). "<br>";

// similar_text for compare total character match in both array or parameters
echo "similar_text : ".similar_text("shezad is good", "shezad is smart and kind", $per). "<br>";
echo "percentage  : ". $per;
?>