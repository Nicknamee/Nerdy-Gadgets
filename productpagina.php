<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <!--Font // Google Font connectie -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
    <?php
    include('connect.php');
    ?>
    <!--Nav bar 1 (bovenste)-->

    <header>
        <nav>
            <?php
            include('header.php'); //-- Header --//
            ?>
        </nav>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NerdgyGadgets.nl</title>
        <link rel="stylesheet" type="text/css" href="CSS/productpagina.css">

        <?php

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);


        $productid = $_GET["productid"];
        $query = "SELECT name, description, price, image 
                 FROM product 
                 WHERE id = '{$productid}'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc()

        ?>
</head>
<body>
<div class="product-container">
    <div class="product-title"><?php echo $row['name'];?></div>
    <img class="product-image" src="<?php echo 'product_images/' .$row['image'] .'.jpg';?>">
    <div class="product-price"><?php echo '$' . number_format($row['price']);?></div>
    <div class="product-description">
        <?php
        echo strlen($row['description']) > 600 ? substr($row['description'], 0, 600) . '...' : $row['description'];
        if (strlen($row['description']) > 600) {
            echo '<button class="read-more-btn" onclick="toggleDescription()">Read More</button>';
        }
        ?>
    </div>
    <div class="full-description" style="display: none;"><?php echo $row['description'];?></div>
    <button class="cta-button">Add to Cart</button>
</div>
<script>
    function toggleDescription() {
        var description = document.querySelector('.product-description');
        var fullDescription = document.querySelector('.full-description');
        var readMoreBtn = document.querySelector('.read-more-btn');

        if (description.style.display !== 'none') {
            description.style.display = 'none';
            fullDescription.style.display = 'block';
            readMoreBtn.innerHTML = 'Read Less';
        } else {
            description.style.display = 'block';
            fullDescription.style.display = 'none';
            readMoreBtn.innerHTML = 'Read More';
        }
    }
</script>

</div>
<?php
include('footer.php');
?>
</body>
</html>
