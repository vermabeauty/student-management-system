<?php
// Check if the username cookie is set
if (!isset($_COOKIE['username'])) {
    // If the cookie is not set, redirect to the login page
    header("Location: login.html");
    exit();
}
?>