<?php


session_start();
session_destroy(); //destroy the session

echo 'You have cleaned session';
header("location:login.php");?>
