<?php
session_start();

echo $_SESSION['username'];

?>

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
</ul>