--TEST--
test1() Basic test
--SKIPIF--
<?php
if (!extension_loaded('tdp')) {
    echo 'skip';
}
?>
--FILE--
<?php
$ret = test1();

var_dump($ret);
?>
--EXPECT--
The extension tdp is loaded and working!
NULL
