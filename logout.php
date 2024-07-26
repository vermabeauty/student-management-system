<?php

if (isset($_COOKIE['username'])) {
    setcookie("username", $username, time() - (86400 * 30), "/"); 
}

// Redirect to login page
header('Location: login.html');
exit;
?>
