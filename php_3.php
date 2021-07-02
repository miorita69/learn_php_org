<?php

$even_numbers = [2, 4, 6, 8, 10];
echo "array consists of: " . count($even_numbers) . " elements; \n";

$first_item = reset($even_numbers);
echo "first element of the array is: ".$first_item.";\n";

$last_item = end($even_numbers);
echo "last element of the array is: ".$last_item.";\n";

print_r($even_numbers);
array_push($even_numbers, 12);
echo "array_push - function. New array with added element\n";
print_r($even_numbers);

array_pop($even_numbers);
echo "array_pop - function. New array with poped element\n";
print_r($even_numbers);

array_unshift($even_numbers, -2);
echo "array_unshift - function. New array with added element\n";
print_r($even_numbers);

array_shift($even_numbers);
echo "array_shift - function. New array with deleted element\n";
print_r($even_numbers);

$male_names = ["Jake", "Eric", "John"];
$female_names = ["Jessica", "Beth", "Sandra"];

echo "array_merge - function. Concatenete two arryies \n";
$names = array_merge($male_names, $female_names);
print_r($names);

echo "sort - function. Sort array \n";
sort($names);
print_r($names);

echo "array_slice - function returns a new array that contains a certain part of a specific array\n";
print_r(array_slice($even_numbers, 3));

echo "array_slice - function take a slice of a specific length\n";
print_r(array_slice($even_numbers, 1, 2));

echo "array_splice - function take a slice of a specific length\n";
print_r(array_splice($even_numbers, 1, 2));

?>