<?php

//サニタイズ関数
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function doubleIt($number) {
 $number *= 2;
 return $number;
} 

function checkPostalCode($str){
    $replaced = str_replace('-','',$str);
    $length = strlen($replaced);
    if($length === 7){
        return true;
    }
    return false;
}

?>