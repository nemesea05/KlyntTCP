<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productImage = $_POST['product_image'];

    $stmt = $conn->prepare("INSERT INTO products (name, price, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $productName, $productPrice, $productImage);

    if ($stmt->execute()) {
        echo "Product added successfully!";
    } else {
        echo "Error adding product: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
