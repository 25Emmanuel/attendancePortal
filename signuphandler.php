<?php
    session_start();
    include 'connection.php';
    



    if (isset($_GET['form-final-part'])) {
        $addressOfSchool = $_GET['schoolAddress'];
        $level = $_GET['level'];
        $course = $_GET['course'];
        $departmentPosted = $_GET['departmentPosted'];
        $duration = $_GET['duration'];
        $anyMedChallenge = $_GET['any-medical-challenge'];
        $conditionIfYes = $_GET['medicalConditionIfYes'];  

        $_SESSION['schoolAddress'] = $addressOfSchool;
        $_SESSION['level'] = $level;
        $_SESSION['course'] = $course;
        $_SESSION['departmentPosted'] = $departmentPosted;
        $_SESSION['duration'] = $duration;
        $_SESSION['anyMedChallenge'] = $anyMedChallenge;
        $_SESSION['conditionIfYes'] = $conditionIfYes;
    }

    if (isset($_GET['form-final-part'])) {

        $firstname = $_SESSION['firstname'];
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $passwordConfirmation = $_SESSION['passwordConfirmation'];
        $surname = $_SESSION['surname'];
        $otherName = $_SESSION['othername'];
        $presentHomeAddress = $_SESSION['presentHomeAddress'];
        $mobileNumber = $_SESSION['mobileNumber'];
        $alternateEmail = $_SESSION['alternateEmail'];
        $gender = $_SESSION['gender'];
        $dob = $_SESSION['dob'];
        $registrationNumber = $_SESSION['registrationNumber'];
        $contactName = $_SESSION['contactName'];
        $contactNumber = $_SESSION['contactNumber'];
        $contactAddress = $_SESSION['contactAddress'];
        $nameOfSchool = $_SESSION['nameOfSchool'];


        $sql = "INSERT INTO `users` (`firstname`, `email`, `password`, `password-confirmation`, `surname`, `other-name`, `present-home-address`,
        `mobile-number`, `alternate-email`, `gender`, `dob`, `registration/matric-no`, `contact-name`, `contact-number`, `contact-address`,
        `name-of-school`, `address-of-school`, `level`, `course`, `department-posted`, `duration`, `med-challenge`, `condition-if-yes`)
        VALUES ('$firstname', '$email', '$password', '$passwordConfirmation','$surname', '$otherName', '$presentHomeAddress',
        '$mobileNumber', '$alternateEmail', '$gender','$dob', '$registrationNumber', '$contactName', '$contactNumber', '$contactAddress',
        '$nameOfSchool', '$addressOfSchool', '$level', '$course', '$departmentPosted', '$duration', '$anyMedChallenge', '$conditionIfYes')";

        if (mysqli_query($conn, $sql)) {
            
            header('location:attendance.php');

        } else {
            echo 'Didnt add to backend';
        }
    }

      

?>