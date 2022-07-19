<?php

require 'function.php';

$postalCode = '123-4567';

if(checkPostalCode($postalCode)){
    echo $postalCode ."は郵便番号として正しい桁数です";
}
else{
    echo $postalCode ."は郵便番号として正しくない桁数です";
}

echo '<br><br><br>';

$postalCode2 = '123-45678910';

if(checkPostalCode($postalCode2)){
    echo $postalCode2 ."は郵便番号として正しい桁数です";
}
else{
    echo $postalCode2 ."は郵便番号として正しくない桁数です";
}

echo '<br><br><br>';

$str = '文字列を置換します';
echo str_replace('置換', 'ちかん', $str);

echo '<br><br><br>';

$str_2 = '指定文字列で、分割します';
echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';

echo '<br><br><br>';

$str_3 = '特定の文字列が含まれるか';
echo preg_match('/文字列/', $str_3);

echo '<br><br><br>';

$num = 4;
$doubled = doubleIt($num);
echo "\$num is: $num<br>";
echo "\$doubled is: $doubled"; 

echo '<br><br><br>';

//配列に配列を追加する
$f_array = ['りんご','みかん'];
array_push($f_array, 'ぶどう', 'なし');

echo '<pre>';
var_dump($f_array);
echo '</pre>';

echo '<br><br><br>';

for ($i = 0; $i <= 100; $i++) {

    if($i === 5){
     continue;
    }
    
    if($i === 10){
     break;
    }
    
     echo "$i"; 
    }

echo '<br><br><br>';

$array_members = [
    '本田' => [
    'height' => 170,
    'hobby' => 'サッカー',
    ],
    
    '香川' => [
    'height' => 165,
    'hobby' => 'サッカー',
    ]
];

foreach ($array_members as $member => $values) { 
    echo $member . "の";
    $n = count($values);
    $i = 1;
    foreach ($values as $key => $value){
        if ($i === $n)  {
        echo $key . "は" . $value . "です。<br>";
        }
        else {
            echo $key . "は" . $value . "、";
        }
        $i += 1; 
    }

}


echo '<br><br><br>';

$test_1 = 123;
$test_2 = 456;

$test_3 = $test_1 . $test_2;

var_dump($test_3);

echo "これはbranch_testでコミットする内容";
echo "test";
echo "test";

// phpinfo();

echo("これはbranch_testでコミットする内容③");
echo("これはbranch_testでコミットする内容④");

require_once 'vendor/autoload.php';

// ircmaxellの利用
$factory = new RandomLib\Factory;
$generator = $factory->getMediumStrengthGenerator();

$randomInt = $generator->generateInt(5, 15);
echo $randomInt;

echo "\n";

$randomString = $generator->generateString(32, 'abcdef');
echo $randomString;

echo "test";
