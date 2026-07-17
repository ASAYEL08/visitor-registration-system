<?php
require_once 'config.php';

$name = $_POST['name'] ?? '';
$age = intval($_POST['age'] ?? 0);

if (!empty($name) && $age > 0) {
    try {
        $stmt = $pdo->prepare("INSERT INTO visitors (name, age, status) VALUES (?, ?, 0)");
        $stmt->execute([$name, $age]);
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input']);
}
?>