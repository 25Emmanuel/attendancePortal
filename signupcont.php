<?php
    session_start();
    if (isset($_GET['form-part-1'])) {
        $surname = $_GET['surname'];
        $otherName = $_GET['othername'];
        $presentHomeAddress = $_GET['address'];
        $mobileNumber = $_GET['mobile'];
        $alternateEmail = $_GET['alternate-email'];
        $gender = $_GET['gender'];
        $dob = $_GET['dob'];
        $registrationNumber = $_GET['matricNo'];
        $contactName = $_GET['contactName'];
        $contactNumber = $_GET['contactNumber'];
        $contactAddress = $_GET['contactAddress'];
        $nameOfSchool = $_GET['school'];

        $_SESSION['surname'] = $surname;
        $_SESSION['othername'] = $otherName;
        $_SESSION['presentHomeAddress'] = $presentHomeAddress;
        $_SESSION['mobileNumber'] = $mobileNumber;
        $_SESSION['alternateEmail'] = $alternateEmail;
        $_SESSION['gender'] = $gender;
        $_SESSION['dob'] = $dob;
        $_SESSION['registrationNumber'] = $registrationNumber;
        $_SESSION['contactName'] = $contactName;
        $_SESSION['contactNumber'] = $contactNumber;
        $_SESSION['contactAddress'] = $contactAddress;
        $_SESSION['nameOfSchool'] = $nameOfSchool;
        
        header('location:next.php');
    }
?>

