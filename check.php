<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['loginname'];
    $_SESSION['username'] = $username;
    header('Location: /');
} else {
    header('Location: /login.php');
}