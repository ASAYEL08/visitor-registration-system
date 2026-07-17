<?php
require_once 'config.php';

header('Content-Type: application/json');

try {
    $stmt = $pdo->query("SELECT * FROM visitors ORDER BY id DESC");
    $visitors = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($visitors);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>