<?php
require_once("vendor/autoload.php");

echo "input: ";
$fp = fopen("php://stdin","r");
$str = rtrim(fgets($fp, 1024));

$foo = new Foo\Foo();
echo "output: ".$foo->Reverse($str);
