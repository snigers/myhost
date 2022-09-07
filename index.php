<?php
$_POST;
const APPLE = "apple";
const BANANA = "banana";
const ORANGE = "orange";

//xdebug_info();
const BASKET = [
	APPLE => 1,
	BANANA => 2,
	ORANGE => 3,
];

$basketApple = [];
$basketBanana = [];
$basketOrange = [];

function helloWorld()
{
	return "Hello world!!";
}

function mySwitch(string $key)
{
	switch ($key) {
		case APPLE:
			$basketApple[$key] = BASKET[$key];
			break;
		case BANANA:
			$basketBanana[$key] = BASKET[$key];
			break;
		case ORANGE:
			$basketOrange[$key] = BASKET[$key];
			break;
	}
}

$str = helloWorld();

foreach (BASKET as $key => $item) {
	mySwitch($key);
}

//$const = FIELD_2;
	echo "1" . PHP_EOL;
	echo "2" . PHP_EOL;
	echo "3" . PHP_EOL;
	echo "4" . PHP_EOL;
