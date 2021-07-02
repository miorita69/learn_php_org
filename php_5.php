<?php

$matrix = [ 
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

echo "display each row as an array\n";
print_r($matrix[0]);

echo "display each element from the first row\n";
print_r($matrix[0][0]);
print_r($matrix[0][1]);
print_r($matrix[0][2]."\n");

echo"display the sum of the elements from each row";
foreach ($matrix as $numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }

    echo "{$sum}\n";
};

echo "operation with associative multidimensional array\n";
$people = [
    "john_doe" => [
        "name" => "John",
        "surname" => "Doe",
        "age" => 25,
    ],
    "jane_doe" => [
        "name" => "Jane",
        "surname" => "Doe",
        "age" => 25,
    ]
];

echo "display the array integral\n";
print_r($people);

echo "display the particular element from the associative multidimensional array\n";
print_r($people['john_doe']['name']);
?>