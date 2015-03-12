<?php

/**
 * @param array $arr
 * @param int   $key
 *
 * @return int
 */
function bsearch($arr, $key) {
    $min = 0;
    $max = count($arr) - 1;
    while ($min <= $max) {
        $mid = intval($min + ($max - $min) / 2);
        if ($key < $arr[$mid]) {
            $max = $mid - 1;
        } elseif ($key > $arr[$mid]) {
            $min = $mid + 1;
        } else {
            return $mid;
        }
    }

    return -1;
}

$array = [23, 45, 67, 89, 123, 568];

echo bsearch($array, 23); // 0
echo bsearch($array, 123); // 4
echo bsearch($array, 120); // -1
