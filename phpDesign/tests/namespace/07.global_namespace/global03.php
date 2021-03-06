<?php

// 在一个命名空间中，当 PHP 遇到一个非限定的函数或常量名称时，如果当前命名空间中不存在该函数或常量，PHP 会退而使用全局空间中的函数或常量

/**
 * Example #2 命名空间中后备的全局函数/常量
 */

namespace A\B\C;

const E_ERROR = 45;
function strlen($str){
    return \strlen($str) - 1;
}

echo E_ERROR, "\n"; // 输出 "45"
echo INI_ALL, "\n"; // 输出 "7" - 使用PHP内置全局常量 INI_ALL

echo strlen('hi'), "\n"; // 输出 "1"
if (is_array('hi')) { // 输出 "is not array"
    echo "is array\n";
} else {
    echo "is not array\n";
}
?>