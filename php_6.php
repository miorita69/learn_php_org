<?php

echo "format strings using variables\n";
$name = "John";
$introduction = "Hello $name";
echo $introduction."\n";

echo "concatenation strings using the dot . operator\n";
$first_name = "John";
$last_name = "Doe";
$name = $first_name . " " . $last_name;
echo $name."\n";

echo "strlen - function the length of a string\n";
$string = "The length of this string is 43 characters.";
echo strlen($string)."\n";

echo "substr - function to cut a part of a string and return it as a new string\n";
$filename = "image.png";
$extension = substr($filename, strlen($filename) - 3);
echo "The extension of the file is $extension";

echo "explode - function to split a string to array";
$numbers = "38,42,58,48,33,59,87,17,20,8,98,14,62,66,14,62,97,66,74,78,66,2,79,29,72,6,3,71,46,68,48,4,12,52,66,48,14,39,63,69,81,61,21,77,10,44,39,82,19,77,100,98,53,95,30,17,30,96,68,47,81,52,82,11,13,83,10,14,49,96,27,73,42,76,71,15,81,36,77,38,17,2,29,100,26,86,22,18,38,64,82,51,39,7,88,53,82,30,98,86";
$number_list = explode(",", $numbers);
echo "The second number in the list is $number_list[1]";
print_r($number_list);

echo "implode - function to join an array to a single string separated with commas";
$fruit_list = ["apple","banana","orange"];
$fruits = implode(",", $fruit_list);
echo "The fruits are $fruits";

?>