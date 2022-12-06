<?php
    include 'connection.php';
    session_start();
    $email = $password = $firstname = $surname = $email = $signIn ='';
    
    date_default_timezone_set('Africa/Lagos');
    $current_time = date('H'); 
    
    

    if (isset($_GET['login'])) {
        $email = $_GET['email'];
        $password = $_GET['password'];
    }



    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

    

    $originalEmail = $feedback[0]['email'];
    $originalPassword = $feedback[0]['password'];

    if (($email === $originalEmail) && ($password === $originalPassword)) {

        if ($current_time == 18) {
            $sql = "DELETE FROM `holder` WHERE `email` = '$email'";
            mysqli_query($conn, $sql);
        }

        
        $_SESSION['firstname'] = $feedback[0]['firstname'];
        $_SESSION['email'] = $feedback[0]['email'];
        $_SESSION['password'] = $feedback[0]['password'];
        $_SESSION['surname'] = $feedback[0]['surname'];
        $_SESSION['other-name'] = $feedback[0]['other-name'];
        $_SESSION['present-home-address'] = $feedback[0]['present-home-address'];
        $_SESSION['mobile-number'] = $feedback[0]['mobile-number'];
        $_SESSION['alternate-email'] = $feedback[0]['alternate-email'];
        $_SESSION['gender'] = $feedback[0]['gender'];
        $_SESSION['dob'] = $feedback[0]['dob'];
        $_SESSION['registration/matric-no'] = $feedback[0]['registration/matric-no'];
        $_SESSION['contact-name'] = $feedback[0]['contact-name'];
        $_SESSION['contact-number'] = $feedback[0]['contact-number'];
        $_SESSION['contact-address'] = $feedback[0]['contact-address'];
        $_SESSION['name-of-school'] = $feedback[0]['name-of-school'];
        $_SESSION['address-of-school'] = $feedback[0]['address-of-school'];
        $_SESSION['level'] = $feedback[0]['level'];
        $_SESSION['course'] = $feedback[0]['course'];
        $_SESSION['department-posted'] = $feedback[0]['department-posted'];
        $_SESSION['duration'] = $feedback[0]['duration'];
        $_SESSION['med-challenge'] = $feedback[0]['med-challenge'];
        $_SESSION['condition-if-yes'] = $feedback[0]['condition-if-yes'];

         

        $firstname = $_SESSION['firstname'];
        $surname = $_SESSION['surname'];
        $email = $_SESSION['email'];
        

        $sql = "SELECT * from holder where firstname = '$firstname' AND surname = '$surname'
        AND email = '$email'";

        $result = mysqli_query($conn, $sql);

        
        $feedbackForLoginQuery = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $checkerForSignIn = $feedbackForLoginQuery[0]['sign-in'];
        $checkerForSignOut = $feedbackForLoginQuery[0]['sign-out'];
       

        if ($checkerForSignIn) {

            $_SESSION['signIn'] = $checkerForSignIn;
        }
        if ($checkerForSignOut) {

            $_SESSION['signOut'] = $checkerForSignOut;
        }
        
        
        

        header('location:attendance.php');
        
    }
    


 