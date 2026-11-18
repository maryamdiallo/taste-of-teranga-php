<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');
if ($name === '' || strlen($name) > 100 || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 150 || $subject === '' || strlen($subject) > 150 || $message === '' || strlen($message) > 2000) {
    header('Location: contact.php?error=1');
    exit;
}
require 'db.php';
try {
    $stmt = $pdo->prepare('INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)');
    $stmt->execute([$name, $email, $subject, $message]);
    header('Location: contact.php?sent=1');
    exit;
} catch (PDOException $e) {
    error_log($e->getMessage());
    header('Location: contact.php?error=1');
    exit;
}
