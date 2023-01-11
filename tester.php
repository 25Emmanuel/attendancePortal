<?php
    include 'connection.php';
    session_start();

    $email = $_SESSION['email'];

    
    $id = $_SESSION['id'];  

    if (isset($_GET['signIn'])) {
        $signIn = $_GET['signIn'];
        echo $signIn;
        $todaysDate = Date("Y-m-d", strtotime("now"));
        $sql = "INSERT INTO `records` (`user-id`, `sign-in`, `sign-out`, `date`) VALUE ('$id', TRUE, FALSE, '$todaysDate')";
        mysqli_query($conn, $sql);
        // setting a session to see if user has signed in and then alert to user he signed in.
        $_SESSION['alert-In'] = true;
        header('location:attendance.php');
        
    }
    
    
    if (isset($_GET['signOut'])) {
        $signOut = $_GET['signOut'];
        $sql = "UPDATE `records` SET `sign-out` = TRUE WHERE `user-id` = '$id'";
        mysqli_query($conn, $sql);
        // setting a session to see if user has signed in and then alert to user he signed in.
        $_SESSION['alert-Out'] = true;
        echo "the err is here";
        echo $signOut;
        header('location:attendance.php');
    }

   
    header('location:attendance.php');


?>