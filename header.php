<!--Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href=CSS/index.css>
<link rel="stylesheet" href="CSS/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
<!--Font // Google Font connectie -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;1,900&display=swap" rel="stylesheet">
<!--Nav bar 1 (bovenste)-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Nerdy Gadgets</a>
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
                <img src="image/logopng.png" alt="Nerdy Gadgets" width="180" class="logo">
            <div class="d-flex justify-content-center align-items-center flex-grow-1">
                <ul class="navbar-nav">
                    <li class="nav-item navbar2">
                        <a class="nav-link" href="#">Games</a>
                    </li>
                    <li class="nav-item navbar2">
                        <a class="nav-link" href="#">Gadgets</a>
                    </li>
                    <li class="nav-item navbar2">
                        <a class="nav-link" href="producten.php">Producten</a>
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
</header>