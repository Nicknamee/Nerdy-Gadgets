<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> <!-- Include jQuery -->
    <link rel="stylesheet" href="../CSS/producten.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <?php include('../header.php'); ?>
    <link href="../CSS/products.css" rel="stylesheet">
    <script src="../javascript/winkelwagen.js"></script> <!-- Include your new script file -->
</head>
<body>
<div class="father">
    <div class="filter-container">
        <!-- Include the filter options from the old version -->
        <h2>Filter</h2>
        <div class="category-filter">
            <h3>Categorieën</h3>
            <ul>
                <li><input type="checkbox" id="laptops"> <label for="laptops">Laptops</label></li>
                <li><input type="checkbox" id="computers"> <label for="computers">Computers</label></li>
                <li><input type="checkbox" id="computer-parts"> <label for="computer-parts">Computer-onderdelen</label></li>
                <li><input type="checkbox" id="routers"> <label for="routers">Routers</label></li>
                <li><input type="checkbox" id="phones"> <label for="phones">Telefoons</label></li>
                <li><input type="checkbox" id="network-equipment"> <label for="network-equipment">Netwerkapparatuur</label></li>
                <!-- ... (copy the rest of the category filter options) ... -->
            </ul>
        </div>
        <div class="category-filter">
            <h3>Merken</h3>
            <ul>
                <li><input type="checkbox" id="apple"> <label for="apple">Apple</label></li>
                <li><input type="checkbox" id="samsung"> <label for="samsung">Samsung</label></li>
                <li><input type="checkbox" id="asus"> <label for="asus">ASUS</label></li>
                <li><input type="checkbox" id="msi"> <label for="msi">MSI</label></li>
                <li><input type="checkbox" id="lenovo"> <label for="lenovo">Lenovo</label></li>
                <li><input type="checkbox" id="intel"> <label for="intel">Intel</label></li>
                <li><input type="checkbox" id="amd"> <label for="amd">AMD</label></li>
                <!-- ... (copy the rest of the brand filter options) ... -->
            </ul>
        </div>
        <div class="price-filter">
            <h3>Prijsfilter</h3>
            <div class="price-range">
                <span class="range-label">Min: €</span>
                <input type="text" class="min-price">
                <span class="range-label">Max: €</span>
                <input type="text" class="max-price">
            </div>
            <button class="filter-button">Filteren</button>
        </div>
        <!-- ... (other filters) ... -->
    </div>

    <div class="product-container">
        <?php
        include('../connect.php');
        $categories = ['laptops', 'phones', 'opslag', 'componenten', 'routers', 'desktops'];

        foreach ($categories as $category) {
            echo "
                <div class='containerProduct container'>
                    <h1>{$category}</h1>
                    <hr>
                    <div class='productList'>
            ";

            $query = "SELECT * from product WHERE category = '{$category}'";
            $result = $conn->query($query);

            foreach ($result as $row) {
                $productName = $row['name'];
                $productPrice = $row['price'];
                $productImage = $row['image'];

                echo "
                    <div class='productClass'>
                        <a href='../Productpagina.php'>
                            <img class='productImg' src='../product_images/{$productImage}.jpg' alt='{$productName}'>
                            <div class='productName'>{$productName}</div>
                        </a>
                        <div class='cart-button'>
                            <button class='fa fa-shopping-cart buttonName' onclick='addToCart({$row['id']}, encodeURIComponent(\"{$productName}\"), {$productPrice})'></button>
                            <span class='productPrice'>€ {$productPrice}</span>
                        </div>
                    </div>
                ";
            }

            echo "
                    </div>
                </div>
            ";
        }

        $conn->close();
        ?>
        <!-- Success Modal -->
        <div class="modal" id="addToCartModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <p>Product added to cart!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Error Modal -->
        <div class="modal" id="errorModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <p>Error adding product to cart.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery and Bootstrap JS -->


    </div>
</div>
</body>
<?php include('../footer.php'); ?>
</html>
