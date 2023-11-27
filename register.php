<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Nerdy Gadgets</title>
</head>
<body>
<h1>Register</h1>
<form action="registerfunctie.php" method="post" novalidate>
    <div>
        <label for="name">Naam</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
    <label for="name">Achternaam</label>
    <input type="text" id="surname" name="surname">
    </div>
    <div>
        <label for="name">Straat</label>
        <input type="text" id="street_name" name="street_name">
    </div>
    <div>
        <label for="name">Huisnummer</label>
        <input type="text" id="apartment_nr" name="apartment_nr">
    </div>
    <div>
        <label for="name">Postcode</label>
        <input type="text" id="postal_code" name="postal_code">
    </div>
    <div>
        <label for="name">Plaats</label>
        <input type="text" id="city" name="city">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">Wachtwoord</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label for="password">Wachtwoord herhalen</label>
        <input type="password" id="password_confirmation" name="password_confirmation">
    </div>
    <button>Registreren</button>

</form>
</body>
</html>