--TEST--
Test bracket notation with quoted escaped backslash
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

$data = [
    "\\" => "value",
];

$jsonPath = new JsonPath();
$result = $jsonPath->find($data, "$['\\\\']");

var_dump($result);
?>
--EXPECT--
array(1) {
  [0]=>
  string(5) "value"
}
