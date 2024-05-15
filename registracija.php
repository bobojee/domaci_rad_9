<?php

    $baza = mysqli_connect("localhost", "root", "", "prvi_cas");

    if(!isset($_POST['email']) || empty($_POST['email']))
    {
        die("Niste prosledili email!");
    }

    if(!isset($_POST['lozinka']) || empty($_POST['lozinka']))
    {
        die("Niste prosledili lozinku!");
    }

    
    $email = $_POST['email'];
    $lozinka = $_POST['lozinka'];
    
    
    $baza -> query("INSERT INTO korisnici_2 (email, lozinka) VALUES ('$email', '$lozinka')");

?>