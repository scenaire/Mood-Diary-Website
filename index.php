<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location:pages/homepage.php");
} else {
    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] == 1) {
            header("location:pages/dashboard.php");
        } else if ($_SESSION['role'] == 2) {
            header("location:pages/patientPage.php");
        }
    }
}

?>


