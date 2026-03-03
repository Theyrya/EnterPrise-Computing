<?php
require_once __DIR__ . "/../models/Student.php";

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$studentModel = new Student();
$action = $_GET['action'] ?? 'dashboard';

if ($action === 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentModel->create($_POST['name'], $_POST['student_id'], $_POST['email']);
    header("Location: index.php?action=dashboard");
    exit;
}

if ($action === 'delete' && isset($_GET['id'])) {
    $studentModel->delete($_GET['id']);
    header("Location: index.php?action=dashboard");
    exit;
}

if ($action === 'create') {
    require __DIR__ . "/../views/create_student.php";
} else {
    $students = $studentModel->getAll();
    require __DIR__ . "/../views/dashboard.php";
}
?>