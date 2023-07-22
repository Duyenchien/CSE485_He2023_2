<?php
// Mảng ban đầu
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị = 3 mà có key là 'b'
$valueB = $a['b']['o']['b'];
echo $valueB; // Output: 3

// Lấy giá trị = 1 mà có key là 'c'
$valueC = $a['a']['c'];
echo $valueC; // Output: 1

// Lấy thông tin của phần tử có key là 'a'
$infoA = $a['a'];
print_r($infoA); // Output: Array ( [b] => 0 [c] => 1 )
?>
