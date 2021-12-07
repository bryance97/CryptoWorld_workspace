<?php

if (isset($_POST["submit"])) {


    //grabing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];


    //Instantiate signupContr Class
    include "classes\dbh.classes.php";
    include "classes\signup.classes.php";
    include "classes\signup-contr.classes.php";
    $signup = new signupContr($uid, $pwd, $pwdrepeat, $email);

    // Runnning error handlers and user signup
    $signup->signupUser();

    // Going to back to the front page
header("location: ..index.php?error=none")

}
