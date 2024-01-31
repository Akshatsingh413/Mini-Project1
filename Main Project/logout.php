<?php
session_start();

session_unset();

// Redirect to the login page or any other page after logout
header("Location: login.php");
exit();
