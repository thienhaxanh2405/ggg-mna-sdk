<?php

require_once '../vendor/autoload.php';

$cellphones = [
    'SMHD', // false
    '0987802175', // 0987802175
    '098 780 2175', // 0987802175
    '+84098 780 2175', // 0987802175
    '84098 780 2175', // 0987802175
    '87802175', // false
    '84847802175', // 0847802175
    '847802175', // 0847802175
];

foreach ($cellphones as $cellphone) {
    var_dump(\GGGMnASDK\Abstraction\Core\Helper::correctCellphoneNumber($cellphone));
}

