<?php
$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

echo "initial array data \n";
print_r($phone_numbers);

echo "\ninserted new element in array data \n";
$phone_numbers["Michael"] = "415-955-3857";
print_r($phone_numbers);


echo "\narray_key_exists - function to check if a key exists within an array\n";
if (array_key_exists("Alex", $phone_numbers)) {
    echo "Alex's phone number is " . $phone_numbers["Alex"] . "\n";
} else {
    echo "Alex's phone number is not in the phone book!\n";
};

if (array_key_exists("Mircea", $phone_numbers)) {
    echo "Mircea's phone number is " . $phone_numbers["Mircea"] . "\n";
} else {
    echo "Mircea's phone number is not in the phone book!\n";
};

echo "array_keys - function to extract only the keys of the array\n";
print_r(array_keys($phone_numbers));

echo "array_values - function to get only the values of an array\n";
print_r(array_values($phone_numbers));
?>