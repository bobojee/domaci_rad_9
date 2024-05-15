<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action = "registracija.php" method = "post">
            <input required type = "email" name = "email" placeholder = "unesite vas email">
            <input required type = "password" name = "lozinka" placeholder = "unesite vasu lozinku">
            <button>Registruj me</button>
            <?php require_once "uloguj_se.php"; ?>
        </form>
    </body>
    
</html>