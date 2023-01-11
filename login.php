<?php
    include 'connection.php';
    session_start();
    $email = $password = $firstname = $surname = $email = $signIn ='';
    
    date_default_timezone_set('Africa/Lagos');
    //$current_time = date('H'); 
    $current_time = 18; 
    
    

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
        
        // clearing the users state holder after 6pm
        if ($current_time == 18) {
            $sql = "DELETE FROM `holder` WHERE `email` = '$email'";
            mysqli_query($conn, $sql);
        }

        
        
        $_SESSION['id'] = $feedback[0]['id'];
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
        $id = $_SESSION['id']; 

        // average attendance feature starts 

        $firstDateOfMonth = date('Y-m-01');
        $lastDateOfMonth = date('Y-m-t');

        function totalWorkingDaysInAMonth () {
        $daysOfTheWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        $currentYear = date('Y');
        $currentMonthInDigit = date('m');
        $currentMonthInWords = date('M');
        $daysInCurrentMonth = date('t');
        $currentDayDate = date('d');
        $currentDay = date('D');
        // $firstDateOfMonth = date('Y-m-01');
        // $lastDateOfMonth = date('Y-m-t');
        $firstDayOfMonth = date('l', strtotime("$currentMonthInWords 1, $currentYear"));
    
        $currentday = array_search($firstDayOfMonth, $daysOfTheWeek);
        $counter = 0;

       
        for ($x = 1; $x <= $daysInCurrentMonth; $x++) {
            
            if ($daysOfTheWeek[$currentday] == 'Saturday') {
                $currentday = 0;
                continue;
            } if ($daysOfTheWeek[$currentday] == 'Sunday' ) {
                $currentday++;
                continue;
            } if ($currentDayDate == $x) {
                $counter++;
                break;
            } 
            else {
                $counter++;
                $currentday++;
            }
            
        }
        
        if ($currentDayDate == 1) {
            return 1;
        } else {

            return $counter;
        }
        }

        $workingDays = totalWorkingDaysInAMonth ();
        
        $sql = "SELECT `sign-in`, `sign-out` FROM `records` WHERE `user-id`=$id AND `Date`BETWEEN '$firstDateOfMonth' AND '$lastDateOfMonth'";
        $result = mysqli_query($conn, $sql);
        $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

        
        $cont = 0;
        foreach ($feedback as $key => $value) {
            if ($value['sign-in'] == 1 && $value['sign-out'] == 1) {
                $cont++;
            }
            
        }
        
        $average = $cont / $workingDays * 100;

        $finalAverage = round($average, 2);
        $_SESSION['average'] = $finalAverage;
        

        // average attendance feature ends
        
        //maintaining state of a returning user 
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
    


 