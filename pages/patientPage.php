<?php

session_start();
include "allRequire.php";

if(!isset($_SESSION['username'])){
	header("location:../index.php");
}

if ($_SESSION['role'] == 1) {
    header("location:dashboard.php");
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>My Mood Diary</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/homepage.css" >

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </head>

    <body>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-6">
                <div class="text-center">
                    <h2>ยินดีต้อนรับ</h2>
                    <h5>คุณ <?php echo $_SESSION['username'];?></h5>
                    <br>
                    <h6 style="color: red;">*กรุณาทำแบบประเมินสุขภาพใจในวันแรกและทำซ้ำทุก 7 วัน</h6>
                    <?php
                        $eva = new evaluateDB;
                        $lastDate = $eva->getlastdateDass($_SESSION['username']);

                        $nextTimeDate = date('Y-m-d', strtotime($lastDate." +7 days"));

                        if ($lastDate != false) {
                            echo "<h6>วันที่คุณทำแบบประเมินสุขภาพใจครั้งสุดท้าย : ".$eva->getThaiDate($lastDate)."</h6>";
                            echo "<h6>กรุณาทำแบบประเมินอีกครั้งในวันที่ ".$eva->getThaiDate($nextTimeDate)." </h6>";
                        } 
                    ?>
                    
                </div>
                <br>
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="goTodassQ()" >ทำแบบประเมิน</button>
                </div>
                <br>
                <div class="text-center">
                    <button type="button" class="btn btn-info btn-lg btn-block" onclick="goToMoodPage()" > บันทึกอารมณ์</button>
                </div>
                <br>
                <div class="text-center">
                    <button type="button" class="btn btn-info btn-lg btn-block" onclick="goToMoodResult()" > ดูประวัติการบันทึกอารมณ์</button>
                </div>
                <br>
                <div class="text-center">
                    <button type="button" class="btn btn-dark btn-lg btn-block" onclick="logOuthandling()" > ออกจากระบบ</button>
                </div>
            </div>   
        </div>
    </div>

    <script>
        function logOuthandling() {
            window.location.href = "../services/controller.php?logout=yes";
        }

        function goTo2Q() {
            window.location.href = "twoQ.php"
        }

        function goTodassQ() {
            window.location.href = "dassQ.php"
        }

        function goToMoodPage() {
            window.location.href = "moodPage.php"
        }
        function goToMoodResult() {
            window.location.href = "MoodResult.php"
        }
    </script>

    </body>
</html>