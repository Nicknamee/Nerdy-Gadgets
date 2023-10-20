function addToCart(productId, productName, productPrice) {
    var cleanedPrice = productPrice;

    if (typeof productPrice !== 'string') {
        cleanedPrice = String(productPrice);
    }

    cleanedPrice = cleanedPrice.replace(',', '');

    $.ajax({
        type: "POST",
        url: "../winkelwagen.php",
        data: {
            addToCart: 1,
            productId: productId,
            productName: productName,
            productPrice: parseFloat(cleanedPrice) || 0
        },
        success: function (response) {
            console.log("Response:", response);
            // Display a Bootstrap modal
            $('#addToCartModal').modal('show');
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
            // Display a Bootstrap modal with an error message
            $('#errorModal').modal('show');
        },
        complete: function(xhr, status) {
            console.log("Request complete with status:", status);
        }
    });
}
