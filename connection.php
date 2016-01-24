<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 21/05/2015
 * Time: 22:11
 */
$mysql_hostname = "fdb13.biz.nf";
$mysql_user = "1854332_tewc";
$mysql_password = "rm193210";
$mysql_database = "1854332_tewc";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>