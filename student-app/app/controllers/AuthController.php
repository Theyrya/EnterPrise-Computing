<?php
require_once __DIR__ . "/../models/User.php";

$userModel = new User();

// Safe action handling
$action = $_GET['action'] ?? 'login';

if ($action === 'register' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $userModel->register($_POST['username'], $_POST['email'], $_POST['password']);
    header("Location: index.php");
    exit;
}

if ($action === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $userModel->login($_POST['email'], $_POST['password']);
    if ($user) {
        $_SESSION['user'] = $user;
        header("Location: index.php?action=dashboard");
        exit;
    } else {
        echo "Invalid login.";
    }
}

if ($action === 'logout') {
    session_destroy();
    header("Location: index.php");
    exit;
}

// Show correct view
if ($action === 'register') {
    require __DIR__ . "/../views/register.php";
} else {
    require __DIR__ . "/../views/login.php";
}
?>