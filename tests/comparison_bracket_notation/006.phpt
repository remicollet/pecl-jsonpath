--TEST--
Test bracket notation with double quotes
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

$data = [
    "key" => "value",
];

$jsonPath = new JsonPath();
$result = $jsonPath->find($data, '$["key"]');

var_dump($result);
?>
--EXPECT--
array(1) {
  [0]=>
  string(5) "value"
}
