--TEST--
Test bracket notation without quotes
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

$data = [
    "key" => "value",
];

$jsonPath = new \JsonPath\JsonPath();
$result = $jsonPath->find($data, "$[key]");

var_dump($result);
?>
--EXPECTF--
Fatal error: Uncaught RuntimeException: Unrecognized token `k` at position 2 in %s
Stack trace:
%s
%s
%s