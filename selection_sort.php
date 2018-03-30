<?php
$array = [2,23,32,43,5,2,31,2,443,5,5,43,1,2,5,4,65,4,23,2,345,45,3];

function selection_sort($arr) {
    //这里减1，是因为没有必要进行最后一次比斩
    for ($i = 0; $i < count($arr) - 1; $i++) {
        // 当 i = 0 时, 默认第一个是最小的，往后比
        // minIndex = 0, 从 1 开始循环
        // 如果有小于 arr[$minIndex] 的 ，重新赋值给 minIndex, 这里有个 1， minIndex = 12
        // 一直往后也没找到更小的，所以把 arr[0] 和最小的 1 互换一下位置。
        // 当 i = 1 时
        // minIndex = 1, 从 2 开始循环
        // 按照上面的方法，找到了最小的2，和 23互换。
        // 依此类推 ...
        $minIndex = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        //交换两个值
        list($arr[$i], $arr[$minIndex]) = [$arr[$minIndex], $arr[$i]];;
    }
    return $arr;
}

var_dump(selection_sort($array));
