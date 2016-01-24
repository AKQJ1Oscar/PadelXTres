<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 21/05/2015
 * Time: 22:18
 */
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
    header("location: index.php");
    exit();
}
?>