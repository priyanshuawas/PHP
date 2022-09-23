<?php
//3.Write a PHP script to check whether a string contains a specific string
//    Sample string=The quick black fox jumps over the white dog.
//Check whether the said string contains the string

$str = strpos('The quick black fox jumps over the white dog.', 'over');
if ($str!=false) {
    echo 'String is present';
} else {
    echo 'String is not present';
}