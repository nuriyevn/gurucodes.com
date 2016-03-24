<?php

exec ('whoami');

ini_set("display_errors", 1);
error_reporting(E_ALL ^ E_NOTICE);

if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__).'/');

$filename = "";

if (strtoupper(substr(PHP_OS, 0, 3)) === "WIN")
{
    $filename = "d:/db_password";
}
else if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN")
{
    $filename = "/d/db_password";
}

// TO open the file you have to grant permissions on
$handle = fopen($filename, "r");

if ($handle)
{
    $db_user = fgets($handle);
    $db_pass = fgets($handle);
}
else
{
    $db_user = "garbage_login";
    $db_pass = "garbage_pass";
}


#$dir = '/d';
#$files_of_tmp_dir = scandir($dir);
#print_r($files_of_tmp_dir);

#echo "db_user:".$db_user.";db_pass:".$db_pass."<br>";

