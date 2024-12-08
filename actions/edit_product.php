<?php
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("UPDATE products SET name = ?, description = ?, price = ?, stock_quantity = ? WHERE id = ?");
        $stmt->execute([
            $_POST['name'],
            $_POST['description'],
            $_POST['price'],
            $_POST['stock_quantity'],
            $_POST['id']
        ]);
        
        header('Location: ../index.php?message=Product updated successfully&type=success');
    } catch(PDOException $e) {
        header('Location: ../index.php?message=Error updating product&type=error');
    }
} else {
    header('Location: ../index.php');
}
?>