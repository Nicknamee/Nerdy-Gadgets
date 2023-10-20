<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <?php include('../header.php');
    ?>
    <link href="../CSS/products.css" rel="stylesheet">
</head>
<body>
<div class="father">
<div class="filter-container">
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
        </ul>
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
            </ul>
        </div>
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
    <!-- Hier kunnen andere filters toegevoegd worden -->
</div> <!--Product filter -->
<div>
<div class="containerProduct container">
    <h1>Laptops</h1>
    <hr>
    <div class="productList">
        <?php
        include('../connect.php'); // Database connectie //

        // Query om producten op te roepen. //
        $query = "SELECT * from product WHERE category = 'laptops'"; //SQL statement//
        $result = $conn->query($query);

        foreach ($result as $row) { // Loop //
            $productName = $row['name']; // Data van de database een variable geven//
            $productPrice = $row['price'];
            $productImage = $row['image'];

            echo "
                    <div class='productClass'>
                        <a href='../Productpagina.php'/>
                            <img class='productImg' src='../product_images/{$productImage}.jpg' alt='{$productName}'> <!-- Foto id uit de database halen en img folder-->
                            <div class='productName'>{$productName}</div> <!-- Product naam -->
                        </a>
                        <div class='cart-button'>
                            <button class='fa fa-shopping-cart buttonName'></button>
                            <span class='productPrice'>€ {$productPrice}</span> <!--Product Prijs-->
                        </div>
                    </div>
                ";
        }
        // Sluit de connectie //
        $conn->close();
        ?>
    </div>
</div>
<div class="containerProduct container">
    <h1>Telefoons</h1>
    <hr>
        <div class="productList">
        <?php
        include('../connect.php');
        $query = "SELECT * from product WHERE category = 'phones'";
        $result = $conn->query($query);

        foreach ($result as $row) {
            $productName = $row['name'];
            $productPrice = $row['price'];
            $productImage = $row['image'];

            echo "
                   <div class='productClass'>
                       <a href='../index.php'/>
                           <img class='productImg' src='../product_images/{$productImage}.jpg' alt='{$productName}'>
                           <div class='productName'>{$productName}</div>
                       </a>
                       <div class='cart-button'>
                           <button class='fa fa-shopping-cart buttonName'></button>
                           <span class='productPrice'>€ {$productPrice}</span>
                        </div>
                    </div>
                ";
        }
        $conn->close();
        ?>
        </div>
</div>
<div class="containerProduct container">
    <h1>Opslag</h1>
    <hr>
    <div class="productList">
        <?php
        include('../connect.php');
        $query = "SELECT * from product WHERE category = 'opslag'";
        $result = $conn->query($query);

        foreach ($result as $row) {
            $productName = $row['name'];
            $productPrice = $row['price'];
            $productImage = $row['image'];

            echo "
                    <div class='productClass'>
                        <a href='../index.php'/>
                            <img class='productImg' src='../product_images/{$productImage}.jpg' alt='{$productName}'>
                            <div class='productName'>{$productName}</div>
                        </a>
                        <div class='cart-button'>
                            <button class='fa fa-shopping-cart buttonName'></button>
                            <span class='productPrice'>€ {$productPrice}</span>
                        </div>
                    </div>
                ";
        }
        $conn->close();
        ?>
    </div>
</div>
<div class="containerProduct container">
    <h1>Componenten</h1>
    <hr>
    <div class="productList">
        <?php
        include('../connect.php');
        $query = "SELECT * from product WHERE category = 'componenten'";
        $result = $conn->query($query);

        foreach ($result as $row) {
            $productName = $row['name'];
            $productPrice = $row['price'];
            $productImage = $row['image'];

            echo "
                    <div class='productClass'>
                        <a href='../index.php'/>
                            <img class='productImg' src='../product_images/{$productImage}.jpg' alt='{$productName}'>
                            <div class='productName'>{$productName}</div>
                        </a>
                        <div class='cart-button'>
                            <button class='fa fa-shopping-cart buttonName'></button>
                            <span class='productPrice'>€ {$productPrice}</span>
                        </div>
                    </div>
                ";
        }
        $conn->close();
        ?>
    </div>
</div>
<div class="containerProduct container">
    <h1>Routers</h1>
    <hr>
    <div class="productList">
        <?php
        include('../connect.php');
        $query = "SELECT * from product WHERE category = 'routers'";
        $result = $conn->query($query);

        foreach ($result as $row) {
            $productName = $row['name'];
            $productPrice = $row['price'];
            $productImage = $row['image'];

            echo "
                    <div class='productClass'>
                        <a href='../index.php'/>
                            <img class='productImg' src='../product_images/{$productImage}.jpg' alt='{$productName}'>
                            <div class='productName'>{$productName}</div>
                        </a>
                        <div class='cart-button'>
                            <button class='fa fa-shopping-cart buttonName'></button>
                            <span class='productPrice'>€ {$productPrice}</span>
                        </div>
                    </div>
                ";
        }
        $conn->close();
        ?>
    </div>
</div>
<div class="containerProduct container">
    <h1>Desktops</h1>
    <hr>
    <div class="productList">
        <?php
        include('../connect.php');
        $query = "SELECT * from product WHERE category = 'desktops'";
        $result = $conn->query($query);

        foreach ($result as $row) {
            $productName = $row['name'];
            $productPrice = $row['price'];
            $productImage = $row['image'];

            echo "
                    <div class='productClass'>
                        <a href='../index.php'/>
                            <img class='productImg' src='../product_images/{$productImage}.jpg' alt='{$productName}'>
                            <div class='productName'>{$productName}</div>
                        </a>
                        <div class='cart-button'>
                            <button class='fa fa-shopping-cart buttonName'></button>
                            <span class='productPrice'>€ {$productPrice}</span>
                        </div>
                    </div>
                ";
        }
        $conn->close();
        ?>
    </div>
</div>
</div><!--Product overzicht -->
</div>
</body>
<?php
include('../footer.php');
?>