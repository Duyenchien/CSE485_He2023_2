<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLength = 0;
$minLength = PHP_INT_MAX;
$maxLengthString = '';
$minLengthString = '';

foreach ($array as $string) {
    $length = strlen($string);

    // Tìm chuỗi có độ dài lớn nhất
    if ($length > $maxLength) {
        $maxLength = $length;
        $maxLengthString = $string;
    }

    // Tìm chuỗi có độ dài nhỏ nhất
    if ($length < $minLength) {
        $minLength = $length;
        $minLengthString = $string;
    }
}

echo "Chuỗi lớn nhất là " . $maxLengthString . ", độ dài = " . $maxLength . "<br>";
echo "Chuỗi nhỏ nhất là " . $minLengthString . ", độ dài = " . $minLength;
?>
