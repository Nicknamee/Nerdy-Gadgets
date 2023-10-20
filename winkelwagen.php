<?php
session_start();

include('connect.php'); // Database connection

// Check if the 'addToCart' form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addToCart'])) {
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];

    // Create an array to store product information
    $product = array(
        'id' => $productId,
        'name' => $productName,
        'price' => $productPrice,
        'quantity' => 1
    );

    // Check if the cart session variable is set
    if (isset($_SESSION['cart'])) {
        // If the product is already in the cart, update the quantity
        if (array_key_exists($productId, $_SESSION['cart'])) {
            $_SESSION['cart'][$productId]['quantity']++;
        } else {
            // If the product is not in the cart, add it
            $_SESSION['cart'][$productId] = $product;
        }
    } else {
        // If the cart session variable is not set, create it and add the product
        $_SESSION['cart'] = array($productId => $product);
    }
}

// Retrieve product details based on the product IDs in the cart
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $productIds = implode(',', array_keys($_SESSION['cart'])); // Convert array keys to comma-separated string
    $query = "SELECT * FROM product WHERE id IN ($productIds)";
    $result = $conn->query($query);
} else {
    $result = false;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
    <link rel="stylesheet" href="CSS/winkelwagen.css">
    <!-- Add your CSS stylesheets, if any -->
</head>

<body>

<header>
    <!-- Add your header content here -->
    <?php include('header.php'); ?>
</header>

<div class="cart-container">
    <h2>Uw Winkelwagen</h2>

    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class='cart-product'>
                <img src='../product_images/<?php echo $row['image']; ?>.jpg' alt='<?php echo $row['name']; ?>'>
                <div class='product-details'>
                    <p><?php echo $row['name']; ?></p>
                    <p>Prijs: € <?php echo $row['price']; ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Uw winkelwagen is leeg.</p>
    <?php endif; ?>

    <!-- Add additional cart summary, total, and checkout button if needed -->
</div>

<footer>
    <!-- Add your footer content here -->
    <?php include('footer.php'); ?>
</footer>

</body>
</html>