<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nerdy Gadgets</title>
<?php
include('header.php'); //-- Header --//
include ('connect.php'); //-- Database connectie --//
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
<div class="container mt-10 box1">
    <div class="col-md-10">
        <div class="row">
            <!--Producten -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="producten/product1.png" class="card-img-top product-img" alt="Playstation 5">
                    <div class="card-body">
                        <h5 class="card-title">Playstation 5</h5>
                        <p class="card-text">Mooie playstation.</p>
                        <p class="card-text">€1500.00</p>
                        <a href="#" class="btn btn-primary">Toevoegen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="producten/product2.png" class="card-img-top product-img" alt="Playstation 4">
                    <div class="card-body">
                        <h5 class="card-title">Playstation 4</h5>
                        <p class="card-text">Mooie Playstation</p>
                        <p class="card-text">€500.00</p>
                        <a href="#" class="btn btn-primary">Toevoegen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="producten/product3.png" class="card-img-top product-img" alt="Playstation 3">
                    <div class="card-body">
                        <h5 class="card-title">Xbox One</h5>
                        <p class="card-text">Xbox One</p>
                        <p class="card-text">€990.99</p>
                        <a href="#" class="btn btn-primary">Toevoegen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src=producten/product4.png class="card-img-top product-img" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Nintendo Switch</h5>
                        <p class="card-text">Goedkope prijs</p>
                        <p class="card-text">€500.00</p>
                        <a href="#" class="btn btn-primary">Toevoegen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="producten/product5.png" class="card-img-top product-img" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Nintendo Switch Lite</h5>
                        <p class="card-text">Een switch maar dan Lite</p>
                        <p class="card-text">€100.00</p>
                        <a href="#" class="btn btn-primary">Toevoegen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="producten/product6.jpg" class="card-img-top product-img" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">Last of Us</h5>
                        <p class="card-text">Goeie game.</p>
                        <p class="card-text">€500.00</p>
                        <a href="#" class="btn btn-primary">Toevoegen</a>
                    </div>
                </div>
            </div>
        </div>
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
                    "Geweldige winkel, veel winkels in mijn leven gezien maar dit is één van de beste!"
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