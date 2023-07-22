<?php 
function sumArray($arr) {
    return array_sum($arr);
}

function productArray($arr) {
    return array_product($arr);
}

function differenceArray($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result -= $arr[$i];
    }
    return $result;
}

function quotientArray($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $result /= $arr[$i];
        } else {
            // Handle division by zero if needed
            return "Error: Division by zero!";
        }
    }
    return $result;
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

$sum = sumArray($arrs);
$product = productArray($arrs);
$difference = differenceArray($arrs);
$quotient = quotientArray($arrs);

echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = $sum" . PHP_EOL;
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = $product" . PHP_EOL;
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = $difference" . PHP_EOL;
echo "Thương các phần tử = " . implode(" / ", $arrs) . " = $quotient" . PHP_EOL;

?>

