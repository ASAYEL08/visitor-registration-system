<?php
require_once 'config.php';

$id = intval($_POST['id'] ?? 0);

if ($id > 0) {
    try {
        $stmt = $pdo->prepare("SELECT status FROM visitors WHERE id = ?");
        $stmt->execute([$id]);
        $currentStatus = $stmt->fetchColumn();

        $newStatus = ($currentStatus == 1) ? 0 : 1;

        $updateStmt = $pdo->prepare("UPDATE visitors SET status = ? WHERE id = ?");
        $updateStmt->execute([$newStatus, $id]);

        echo json_encode(['success' => true, 'new_status' => $newStatus]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid ID']);
}
?>