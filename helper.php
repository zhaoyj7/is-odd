<?php
if(!function_exists('is_odd')){
    /**
     * 奇数判断
     * @param int num - 数字
     * @return bool - 是否奇数
     */
function is_odd($num) 
{
    $result = abs($num);
    if (!is_numeric($num) || is_bool($num) || is_null($num)) {
        throw new TypeError('expected a number');
    }
    if (!is_int($result) && $result != $result) {
        throw new Exception('expected an integer');
    }
    if ($result > PHP_INT_MAX) {
        throw new Exception('value exceeds maximum safe integer');
    }
    return ($result % 2) === 1;
}
}
