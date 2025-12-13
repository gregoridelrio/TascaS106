<?php
$line = __LINE__;
$file = __FILE__;
$dir = __DIR__;

function testFunction()
{
    echo "Actual function: " . __FUNCTION__ . "<br>";
}

echo "You are in line number: " . $line . "<br>";
echo "Actual file: " . $file . "<br>";
echo "Actual directory: " . $dir . "<br>";
testFunction();
