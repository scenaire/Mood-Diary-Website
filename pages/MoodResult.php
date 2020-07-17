<?php

session_start();
include "allRequire.php";

if(!isset($_SESSION['username'])){
	header("location:../index.php");
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}

$mood = new moodDB; 
$moodArr = $mood->get_mood_by_user($_SESSION['username']);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>My Mood Diary</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/homepage.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.0/Chart.js"></script>


    </head>

    <body>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10">
                <div class="text-center">
                    <h4>กราฟอารมณ์ของคุณ</h4>
                </div>
                    <div class="progress">
                        <div class="progress-bar" style="width:0%"></div>
                    </div>
                    <br>
                    <h6>วันแรกที่บันทึก: <span style="color: #32B0E0;"> <?php echo $mood->getThaiDate($moodArr[0]['date']); ?> </span></h6>
                    <h6>วันสุดท้ายที่สามารถบันทึกได้: <span style="color: #32B0E0;"><?php echo $mood->getThaiDate($moodArr[count($moodArr)-1]['date']); ?></span></h6> 
                    <br>




                
                    <div class="table-responsive text-nowrap" >
                        <table class="table table-bordered" >
                            <thead>
                                <tr>
                                <th ></th>
                                    <?php 
                                        foreach ($moodArr as $key) {
                                            echo "<th class='text-center'>".$mood->getDayDate($key['date'])."<br>".$mood->getMonthDate($key['date'])."</th>";
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-left" scope="row">มีความสุขมาก</th>
                                    <?php 
                                        foreach ($moodArr as $key) {
                                            if ($key['mood_level'] == 5) {
                                                echo "<td><div class='dot mania'></div></td>";
                                            } else {
                                                echo "<td></td>";
                                            }
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="text-left" scope="row">รู้สึกดี</th>
                                    <?php 
                                        foreach ($moodArr as $key) {
                                            if ($key['mood_level'] == 4) {
                                                echo "<td><div class='dot happy'></div></td>";
                                            } else {
                                                echo "<td></td>";
                                            }
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="text-left" scope="row">ปกติ</th>
                                    <?php 
                                        foreach ($moodArr as $key) {
                                            if ($key['mood_level'] == 3) {
                                                echo "<td><div class='dot normal'></div></td>";
                                            } else {
                                                echo "<td></td>";
                                            }
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="text-left" scope="row">รู้สึกแย่</th>
                                    <?php 
                                        foreach ($moodArr as $key) {
                                            if ($key['mood_level'] == 2) {
                                                echo "<td><div class='dot unhappy'></div></td>";
                                            } else {
                                                echo "<td></td>";
                                            }
                                        }
                                    ?>
                                </tr>
                                <tr>
                                    <th class="text-left" scope="row">เศร้ามาก</th>
                                    <?php 
                                        foreach ($moodArr as $key) {
                                            if ($key['mood_level'] == 1) {
                                                echo "<td><div class='dot sad'></div></td>";
                                            } else {
                                                echo "<td></td>";
                                            }
                                        }
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <br>
                    <br>
                    <button type='button' class='btn btn-dark btn-lg btn-block' onclick='goTohomepage()' >กลับหน้าหลัก</button>
                </div>
        </div>
    </div>

    <script>
        function goTohomepage() {
            window.location.href = "../index.php";
        }
    </script>

    </body>
</html>