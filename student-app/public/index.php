<?php
session_start();
?>
<link rel="stylesheet" href="style.css">
<?php
$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'register':
    case 'login':
    case 'logout':
        require '../app/controllers/AuthController.php';
        break;

    case 'dashboard':
    case 'create':
    case 'delete':
        require '../app/controllers/StudentController.php';
        break;

    default:
        require '../app/controllers/AuthController.php';
}
?>