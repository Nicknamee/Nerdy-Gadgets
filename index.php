<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/connect.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nerdy Gadgets</title>
<link rel="stylesheet" href="CSS/index.css">
<?php
include('header.php'); //-- Header --//
?>
<body>

<div class="typewriter-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="typewriter-text">Welkom bij Nerdy Gadgets!</h1>
            </div>
        </div>
    </div>
</div>
<div class="container text-slider">
    <div id="textCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <p class="slider-text">Altijd een snelle levering!</p>
            </div>
            <div class="carousel-item">
                <p class="slider-text">Niet goed? Geld terug!</p>
            </div>
            <div class="carousel-item">
                <p class="slider-text">Heel veel korting op je producten!</p>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#textCarousel').carousel({
            interval: 1500
        });
    });
</script>
<h1 class="text-center">Aanbevolen producten</h1>
<div class="containerProduct container">
    <div class="productList">
        <?php
        include('connect.php');
        $query = "SELECT * from product WHERE id IN (1, 23, 30, 2) LIMIT 4";
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
<div class="quote">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <blockquote class="quotetext">
                    “Wij zijn Nerdygadgets. We zijn trots op onze producten en geloven in kwaliteit. In ieder huis vindt een product van Nerdygadgets zijn thuis. Ondanks onze grootte zien klanten ons als kleinschalig en betrokken. Persoonlijk klantcontact staat bij ons hoog in het vaandel.”
                </blockquote>
            </div>
            <div class="col-md-6">
                <img src="image/lamp.png" alt="Image" class="quote-image">
            </div>
        </div>
    </div>
</div>
<!-- Review -->
<h1 class="text-center reviewh1">Reviews van onze klanten</h1>
<div class="container review-section review">
    <div class="row">
        <div class="col-md-4">
            <div class="review-card">
                <div class="review-rating">5.0</div>
                <div class="review-author">Deez</div>
                <div class="review-text">
                    "Geweldige winkel, veel winkels in mijn leven gezien maar dit is één van de beste! Ik kom graag terug de volgende keer."
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="review-card">
                <div class="review-rating">5.0</div>
                <div class="review-author">Ruud Jan</div>
                <div class="review-text">
                    "Kwaliteit + prijsverhouden is zeer goed hier! Ik kom zeer zeker terug. Je hebt een vaste klant erbij"
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="review-card">
                <div class="review-rating">5.0</div>
                <div class="review-author">Pieter Post</div>
                <div class="review-text">
                    "Als een echte geek is dit wel echt een paradijs voor mij zoveel spullen waarvan ik alleen durfde van te dromen"
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
include('footer.php');
?>
</body>
</html>