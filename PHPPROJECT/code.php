<?php
$Str1=$_POST['Str1'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$Ascii=$_POST['str2'];
$trim=$_POST['Trim'];
$orginal=$_POST['B_Replace'];
$Replace=$_POST['Replace'];
$length=$_POST['length'];
$case=$_POST['case'];
$case2=$_POST['case2'];
$Pos=$_POST['Pos'];
$P_char=$_POST['P_char'];
$S_string=$_POST['S_string'];
$Substrlen=$_POST['Substrlen'];
$L_string=$_POST['L_string'];
$Binary=$_POST['Binary'];
$C_string=$_POST['C_string'];
$C_char=$_POST['C_char'];
if(isset($_POST['Md5'])=='Submit')
    echo md5($Str1);
if(isset($_POST['N_format'])=='NF')
    echo number_format($num1,$num2);
if(isset($_POST['Ord'])=='Ascii')
    echo ord($Ascii);
if(isset($_POST['Rtrim'])=='Trim')
    echo rtrim($trim);
if(isset($_POST['StrReplace'])=='Rename')
    echo str_replace($Str1,$Replace);
if(isset($_POST['StrLen'])=='Length')
    echo strlen($length);
if(isset($_POST['S_case_camp'])=='compare')
    echo strcasecmp($case,$case2);
if(isset($_POST['Strrpos'])=='position')
    echo strrpos($Pos,$P_char);
if(isset($_POST['Substr'])=='Substring')
    echo substr($S_string,$Substrlen);
if(isset($_POST['S_to_lower'])=='Lower')
    echo strtolower($L_string);
if(isset($_POST['Bin_to_hex'])=='Hexa')
    echo bin2hex($Binary);
if(isset($_POST['Chop'])=='partition')
    echo chop($C_string,$C_char);
?>