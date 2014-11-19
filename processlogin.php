<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 11/19/2014
 * Time: 3:27 PM
 */

session_start();
$un = $_POST['un'];
$pw = $_POST['pw'];

// Accessing $_SESSION
$_SESSION['userid'] = $un;

echo 'Session variable "userid" is' . $_SESSION['userid'];
?>