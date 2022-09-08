<?php
function pr($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

var_dump($_POST);
pr($_POST);

//pr("test");