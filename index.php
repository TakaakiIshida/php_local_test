<?php

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