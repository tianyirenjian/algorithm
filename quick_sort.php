<?php
$array = [1,4,23,5,312,32,123,545,56,7,67,4,5,3,24,4,456,4,2,2,3];

function quick($arr) {
    if (!is_array($arr)) {
        return [];
    }
    if (count($arr) <= 1) {
        return $arr;
    }
    $left = $right = [];
    for ($i = 1; $i < count($arr); $i ++) {
        if ($arr[$i] <= $arr[0]) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    $l = quick($left);
    $r = quick($right);
    return array_merge($l, [$arr[0]], $r);
}

var_dump(quick($array));
