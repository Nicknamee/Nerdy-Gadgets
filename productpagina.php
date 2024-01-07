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
<<<<<<< HEAD
    <!--Nav bar 1 (bovenste)-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/Nerdy-Gadgets/index.php">Nerdy Gadgets</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="help.php">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Navbar 2 (onderste)-->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <img src="image/logopng.png" title="Nerdy Gadgets" width="150" class="logo">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <ul class="navbar-nav">
                        <li class="nav-item navbar2">
                            <a class="nav-link" href="#">Games</a>
                        </li>
                        <li class="nav-item navbar2">
                            <a class="nav-link" href="#">Gadgets</a>
                        </li>
                        <li class="nav-item navbar2">
                            <a class="nav-link" href="/Nerdy-Gadgets/products/producten.php">Producten</a>
                        </li>
                        <li class="nav-item navbar2">
                            <a class="nav-link" href="#">Aanbiedingen</a>
                        </li>
                        <li class="nav-item navbar2">
                            <a class="nav-link" href="#">Nieuw!</a>
                        </li>
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-0 mr-auto mr-4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Zoek een item" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0 bg-primary" type="submit">Zoek</button>
                </form>
            </div>
        </nav>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NerdgyGadgets.nl</title>
    <link rel="stylesheet" type="text/css" href="CSS/productpagina.css">
</head>
<body>
<div class="product-container">
    <div class="product-title">Apple MacBook Air (2020) MGN63N/A - 13.3 inch - Apple M1 - 256 GB - Space Grey</div>
    <div class="product-image">
        <img src="/product_images/4GPNDDRJp92J.jpg" title="Macbook Air">
    <div class="product-price">€999.99</div>
    <div class="product-description"> Deze Macbook Air is geschikt voor alledaagse taken en is het dunste en lichtste notebook ooit gemaakt door Apple.<br>
        Voorzien van een krachtige Apple M1 chip, True Tone Retina beeldscherm, Magic Keyboard, Touch ID vingerafdruksensor en een batterijduur tot wel 18 uur lang.<br><br>
        Sneller en betere prestaties De Apple M1 processor is speciaal ontworpen voor de Macbook. De processor is energiezuiniger en veel krachtiger dan de Intel processoren die voorheen in de oude modellen zaten.</div>
    <button class="cta-button">Add to Cart</button>
    </div>
</div>

<footer>
    <div class= "footerContainer">
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook "></i></a>
            <a href=""><i class="fa-brands fa-instagram "></i></a>
            <a href=""><i class="fa-brands fa-twitter "></i></a>
            <a href=""><i class="fa-brands fa-google plus "></i></a>

        </div>
        <div class="footerNav">
            <ul> <li><a href="">about us</a> </li>
                <li><a href="">contact us</a> </li>
                <li><a href="">get a job</a> </li>
                <li><a href="">our team </a> </li>
                <li><a href="">customer service </a> </li>

            </ul>
        </div>
    </div>
    <div class="footerBottom">
        <p>Copyright &copy;2023; Designed <span class="designer">Nerdy Gadgets Team 4</span></p>

    </div>
</footer>
=======
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
>>>>>>> origin/master
</body>
</html>
