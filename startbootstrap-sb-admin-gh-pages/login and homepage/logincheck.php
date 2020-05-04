<?php

// Start sessions
session_start();

// If the session variable is not set, redirect to login.php
if (!isset($_SESSION['login_user'])) {
    header('location: login.php');
    
}
if ($_SESSION['login_level'] >= $pagelevel) {
    echo "yes, permission";
} else {
    header('location: error.php');
}
?>