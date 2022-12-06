<?php
    include 'connection.php';
    $currentDay = date('l');
    echo $currentDay."<br>";


    $daysOfTheWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

    foreach ($daysOfTheWeek as $value) {
        if ($value == $currentDay) {
            $sql = "ALTER TABLE `records` ADD `$currentDay` ";
            continue;
        } else {
            echo "$value"."<br>";
        }
    }
    