<script>
document.getElementById('apply-coupon').addEventListener('click', function() {
    let couponCode = document.getElementById('coupon-code').value.trim();
    let productId = this.getAttribute('data-product');
    let priceElement = document.getElementById('product' + productId + '_price');
    let originalPrice = parseFloat(priceElement.innerText.replace('P', '').replace(',', ''));

    if (couponCode) {
        fetch('apply_coupon.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `coupon_code=${couponCode}&product_id=${productId}&price=${originalPrice}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let discount = data.discount;
                let newPrice = originalPrice - discount;
                priceElement.innerText = `P${newPrice.toFixed(2)}`;
                alert('Coupon applied successfully!');
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while applying the coupon.');
        });
    } else {
        alert('Please enter a coupon code!');
    }
});
</script>
