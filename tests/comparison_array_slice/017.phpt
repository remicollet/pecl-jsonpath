--TEST--
Test array slice with negative step on partially overlapping array
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

$data = [
    "first",
    "second",
    "third",
    "forth",
    "fifth",
];

$jsonPath = new \JsonPath\JsonPath();
$result = $jsonPath->find($data, '$[7:3:-1]');

var_dump($result);
?>
--EXPECT--
array(1) {
  [0]=>
  string(5) "fifth"
}
