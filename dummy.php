<?php
    include 'connection.php';
    session_start();
    $currentDay = date('l');
    
    
    
    
    $signIn= '';
    $signOut = '';
    $firstname = $surname = $email = '';

    if (!empty($_GET['signOut'])) {
        $signOut = $_GET['signOut'];
        $_SESSION['signOut'] = $_GET['signOut'];
    
    }

    

    if (!empty($_GET['signIn']) && empty($_GET['signOut'])) {
        $signIn = $_GET['signIn'];
        $_SESSION['signIn'] = $_GET['signIn'];
        $firstname = $_SESSION['firstname'];
        $surname = $_SESSION['surname'];
        $email = $_SESSION['email'];

        if (empty($_GET['signOut'])) {
            $sql = "INSERT INTO `holder` (`firstname`, `surname`, `email`, `sign-in`) VALUES (
            '$firstname', '$surname', '$email', '$signIn'
            )";

            mysqli_query($conn, $sql);
        }

        
         header('location:index.php');
        
    } 

    // working to show you signed when you log in after signin
    if (!empty($_GET['signOut']) && !empty($_GET['signIn'])) {
        
        $signOut = $_GET['signOut'];
        $_SESSION['signOut'] = $_GET['signOut'];
        $signIn = $_GET['signIn'];
        $_SESSION['signIn'] = $_GET['signIn'];
        $firstname = $_SESSION['firstname'];
        $surname = $_SESSION['surname'];
        $email = $_SESSION['email'];
        echo $signOut;
        $sql = "UPDATE `holder` SET `sign-out` = '$signOut' WHERE `email`= '$email'";

        mysqli_query($conn, $sql);
    }
    
    

    echo "outer"."$signIn"."<br>"."outer"."$signOut";
    $x = 3;
    if ($signIn && $signOut) {
        echo "entered";
        $sql = "INSERT INTO `records` (`firstname`, `surname`, `email`, `$currentDay`) VALUE 
        ('$firstname', '$surname', '$email', 'Present')";

        if (mysqli_query($conn, $sql)) {
            
        } else {
            echo 'Error';
        }

        header('location:attendance.php');
    } 

    if ($reset) {
        session_destroy();
    }


    