<?php
/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/7/24
 * Time: 17:22
 * 插入排序
 */
function insertionSort(&$arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++)
        for ($j = $i; $j > 0; $j--) {
            if ($arr[$j] < $arr[$j - 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $tmp;
          }
     }
}

$arr = array(9, 2, 232, 12, 1, 3, 53, 17, 7);
insertionSort($arr);
var_dump($arr);
