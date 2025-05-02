<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $couponCode = $_POST['coupon_code'];
    $productId = $_POST['product_id']; 

    $stmt = $conn->prepare("SELECT * FROM coupons WHERE coupon_code = ?");
    $stmt->bind_param("s", $couponCode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $coupon = $result->fetch_assoc();
        $discount = $coupon['discount'];

        $response = [
            "status" => "success",
            "discount" => $discount,
            "message" => "Coupon applied successfully!"
        ];
    } else {
        $response = [
            "status" => "error",
            "message" => "Invalid coupon code!"
        ];
    }

    echo json_encode($response);
    exit;
}
?>
