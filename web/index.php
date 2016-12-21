<?php
spl_autoload_register(function($classname){
	$pathArray = explode('\\', $classname);
	$class = array_pop( $pathArray ).'.php';
	$root = dirname(dirname(__FILE__));
	array_unshift($pathArray, $root);
	$path = implode('/', $pathArray);
	include $path.'/'.$class;
});

$app = new \cards\Application();
$app->run();