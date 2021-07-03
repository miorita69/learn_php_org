<?php

$even_numbers = [2,4,6,8,10,12,14,16,18,20];

echo "FOR - loop simple \n";
for ($i = 0; $i < count($even_numbers); $i=$i+1) {
    $even_number = $even_numbers[$i];
    echo $even_number . "\n";
};

echo "FOR - loop object version \n";
foreach ($even_numbers as $number) {
    echo $number."\n";
};

foreach ($even_numbers as $key => $number) {
    echo "even_numbers[".$key."] = ".$number."\n";
};

echo "FOR - loop for associative array \n";
$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];

foreach($phone_numbers as $key => $number) {
  echo "$key's phone number is $number.\n";
}

?>