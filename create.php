<?php
$num_1=$_POST["num1"];
$num_2=$_POST["num2"];

if(isset($_POST['RESULT_ADD'])){
    echo $num_1 + $num_2;
}
if(isset($_POST["RESULT_SUB"])){
    ECHO $num_1 - $num_2;
}
if(isset($_POST["RESULT_MULTI"])){
    ECHO $num_1 * $num_2;
}
if(isset($_POST["RESULT_DIVIDE"])){
    ECHO $num_1 / $num_2;
}
if(isset($_POST["RESULT_MODULUS"])){
    ECHO $num_1 % $num_2;
}
