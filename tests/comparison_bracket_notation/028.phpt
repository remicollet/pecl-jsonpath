--TEST--
Test bracket notation with quoted root literal
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

$data = [
    "$" => "value",
    "another" => "entry",
];

$jsonPath = new \JsonPath\JsonPath();
$result = $jsonPath->find($data, "$['$']");

var_dump($result);
?>
--EXPECT--
array(1) {
  [0]=>
  string(5) "value"
}
