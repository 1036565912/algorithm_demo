<?php

//快速排序(一)

$arr = [
    1,3,5454,6576,8434,3,3,7,5,876
];

//思想 选择轴心为左边第一个  并记录其值为s

function quickSort (array &$arr, int $left, int $right)
{
    //定义初始记录值
    $s = 0;
    $s = $arr[$left];
    //定义循环值
    $i = $j = 0;
    //赋予边界值
    $i = $left;
    $j = $right + 1;

    if ($left >= $right) {
        return ;
    }

    while (true) {
        //向右寻找 满足条件 继续遍历
        while ($i + 1 < count($arr) && $arr[++$i] < $s);
        //向左寻找  满足条件 继续遍历
        while ($j - 1 > -1 && $arr[--$j] > $s);

        if ($i >= $j) {
            //代表左边的不小于轴心  右边的不大于轴心
            break;
        }

        //当前还没有排序完左边的小于s  右边的大于s
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
    }

    //遍历完毕  左边的小于s, 右边的大于s
    $arr[$left] = $arr[$j];
    $arr[$j] = $s;

    //排序左边
    quickSort($arr, $left,$j - 1);
    //排序右边
    quickSort($arr, $j + 1, $right);
}

quickSort($arr, 0, count($arr) - 1);

var_dump($arr);