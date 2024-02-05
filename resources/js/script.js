/////////////////////// cart features
$(document).on('click', '.add-to-cart-button', function() {
    var productId = $(this).data('id'); // Assuming a data attribute for product ID

    $.ajax({
        url: '/cart/add/' + productId, // Adjust the URL if needed
        method: 'POST',
        success: function(response) {
            // Handle successful addition (e.g., display a success message)
            updateCartCount(); // Update the cart count after addition
        },
        error: function(error) {
            // Handle errors
        }
    });
});

function updateCartCount() {
    $.ajax({
        url: '/cart/count', // Adjust the URL if needed
        method: 'GET',
        success: function(response) {
            if (response.count === 0) {
                // handle empty cart case in UI
                $('.cart-count').text('0');
                // ... (optional additional UI updates)
            } else {
                $('.cart-count').text(response.count);
            }
        },
        error: function(error) {
            // Handle errors
            console.error(error);
        }
    });
}

$(document).ready(function() {
    updateCartCount();
});
/////////////////////// cart features