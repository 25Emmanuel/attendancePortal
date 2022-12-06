<?php
    session_start();

    if (isset($_GET['logOut'])) {
        session_destroy();

        header('location:index.php');
    }