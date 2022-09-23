<?php
//7.Write a PHP script to generate simple random password [do not use rand()
//function] from a given string Sample string
//'1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxy'
//Note : Password length may be 6, 7, 8 etc.

$str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxy';
echo substr(str_shuffle($str), 0, 5);