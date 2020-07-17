<?php

    session_start();
    include "../pages/allRequire.php";
    $_SESSION['LAST_ACTIVITY'] = time();

    /*****************************************starts on 2Q */ 

    if (isset($_POST['moodSubmit'])) {

        $mood_level = $_POST['inputMood'];

        $moodDB = new moodDB;

        $check = $moodDB->check_initial($_SESSION['username']);

        if (!$check) {
            if ($moodDB->initial($_SESSION['username'])) {
                if ($moodDB->updateMood($_SESSION['username'],$mood_level)) {
                    header("location:../pages/MoodResult.php");
                }
                else {
                    header("location:../pages/moodPage.php?moodresult=wrong");
                }
            } else {
                header("location:../pages/moodPage.php?moodresult=wrong");
            }
        } else {
            if ($moodDB->updateMood($_SESSION['username'],$mood_level)) {
                header("location:../pages/MoodResult.php");
            }
            else {
                header("location:../pages/moodPage.php?moodresult=wrong");
            }
        }

        

        

    }

?>