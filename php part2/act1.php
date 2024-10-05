<?php
$items = [
    ['name' => "Widget_A", "Price" => 10],
    ['name' => "Widget_B", "Price" => 15],
    ['name' => "Widget_C", "Price" => 20],
];

$total = 0;

foreach ($items as $item) {
    $total += $item['price'];
}

echo "Total_price: $" . $total;

$string = "Poorly written program that has little structure and readability";

$string_no_spaces = str_replace(' ', '', $string);
$string_lowercase = strtolower($string_no_spaces);

echo "\nModified string: " . $string_lowercase;

$number = 42;

if ($number % 2 == 0) {
    echo "\n Number: " . $number . " = even.";
} else {
    echo "\nNumber: " . $number . " = odd.";
}
?>