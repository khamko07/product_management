<?php
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare("INSERT INTO products (name, description, price, stock_quantity) VALUES (?, ?, ?, ?)");
        $stmt->execute([
            $_POST['name'],
            $_POST['description'],
            $_POST['price'],
            $_POST['stock_quantity']
        ]);
        
        header('Location: ../index.php?message=Product added successfully&type=success');
    } catch(PDOException $e) {
        header('Location: ../index.php?message=Error adding product&type=error');
    }
} else {
    header('Location: ../index.php');
}
?>