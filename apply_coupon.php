<?php
include "connection.php";  

if (isset($_POST['coupon_code']) && isset($_POST['product_id'])) {
    $couponCode = mysqli_real_escape_string($link, $_POST['coupon_code']);
    $productId = mysqli_real_escape_string($link, $_POST['product_id']);

    $couponQuery = "SELECT * FROM coupons WHERE coupon_code = '$couponCode'";
    $couponResult = mysqli_query($link, $couponQuery);

    if (mysqli_num_rows($couponResult) > 0) {
        $couponData = mysqli_fetch_assoc($couponResult);

        $isValid = true; 

        if ($isValid) {
            $discount = $couponData['discount_amount'];

            echo json_encode([
                "success" => true,
                "discount" => $discount,
            ]);
        } else {
            echo json_encode([
                "success" => false,
                "message" => "The coupon code is not valid.",
            ]);
        }
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Coupon code not found.",
        ]);
    }
} else {
    echo json_encode([
        "success" => false,
        "message" => "Invalid request. Missing coupon code or product ID.",
    ]);
}
?>
