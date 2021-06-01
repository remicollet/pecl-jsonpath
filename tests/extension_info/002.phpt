--TEST--
Test presence of extension enabled info in phpinfo output
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

ob_start();
phpinfo(INFO_MODULES);
$info = ob_get_contents();
ob_end_clean();

preg_match('/^jsonpath support => (.*)$/m', $info, $match);
echo !empty($match) ? $match[0] : '';

?>
--EXPECTF--
jsonpath support => %s
