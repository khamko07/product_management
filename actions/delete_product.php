<?php
require_once '../includes/db.php';

if (isset($_GET['id'])) {
    try {
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$_GET['id']]);
        
        header('Location: ../index.php?message=Product deleted successfully&type=success');
    } catch(PDOException $e) {
        header('Location: ../index.php?message=Error deleting product&type=error');
    }
} else {
    header('Location: ../index.php');
}
?>