<?php
    session_start();
    if (isset($_GET['start-sign-up'])) {
        $firstname = $_GET['firstname'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $passwordConfirmation = $_GET['passwordConfirmation'];


        $_SESSION['firstname'] = $firstname;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['passwordConfirmation'] = $passwordConfirmation;
        header('location:form.php');
    }