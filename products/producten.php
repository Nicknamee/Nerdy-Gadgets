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
<div class="containerProduct container">
    <h1>Laptops</h1>
    <hr>
    <div class="productList">
        <?php
        include('../connect.php');
        // Query to retrieve product data

        $query = "SELECT * from product WHERE category = 'laptops'";
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
        // Close the database connection
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
        // Query to retrieve product data

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
        // Close the database connection
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
        // Query to retrieve product data

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
        // Close the database connection
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
        // Query to retrieve product data

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
        // Close the database connection
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
        // Query to retrieve product data

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
        // Close the database connection
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
        // Query to retrieve product data

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
        // Close the database connection
        $conn->close();
        ?>
    </div>
</div>
</body>
<?php
include('../footer.php');
?>