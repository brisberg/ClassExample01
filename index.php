<?php
/**
 * Created by PhpStorm.
 * User: Brandon
 * Date: 11/19/2014
 * Time: 3:29 PM
 */

//check the users login
session_start();

if (!isset($_SESSION['userid'])) {
    // User is not logged in
    require('login.html');
    exit();
}

// User is logged in
$username = $_SESSION['userid'];
echo 'Welcome ' . $username . '! You are logged in';

?>