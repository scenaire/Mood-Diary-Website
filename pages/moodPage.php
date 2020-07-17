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

        <link rel="stylesheet" href="../css/bootstrap.css" >
        

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="../css/homepage.css" >

    </head>

    <body>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10">
                <br>
                <form method="post" action="../services/mood.php">
                <h3>บันทึกอารมณ์</h3>
                <div class="progress">
                    <div class="progress-bar" style="width:0%"></div>
                </div>
                <?php
                    if (isset($_GET['moodresult'])) {
                        if ($_GET['moodresult'] == "wrong") {
                            echo "<div class='alert alert-danger' role='alert'> ไม่สามารถเพิ่มอารมณ์ของท่านได้ กรุณาลองอีกครั้งภายหลัง </div>";
                        }
                    }
                ?>
                <br>
                <h5>กรุณากดที่อารมณ์ที่ตรงกับอารมณ์ของท่านในขณะนี้</h5>
                <p>หากกดบันทึกอารมณ์ใหม่ในวันเดียวกันจะทำการอัปเดตอันเดิม</p>
                <?php 
                
                $date = gmdate('Y-m-d H:i:s');
                $date = new Datetime($date, new DateTimeZone('UTC'));
                $date = $date->setTimeZone(new DateTimeZone('Asia/Bangkok'));
                $dt = $date->format('Y-m-d H:i:s');
                $d = $date->format('d/m/Y');

                echo "<p>วันที่บันทึก : ".$d."</p>"
                
                ?>
                

                <div class="form-group row">
                    <div class="col-sm-12 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-danger btn-md">
                            <input type="radio" name="inputMood" id="mood_level" value="1" autocomplete="off" > (✖︿✖) <br> เศร้ามาก
                        </label>
                        <label class="btn btn-outline-info btn-md ">
                            <input type="radio" name="inputMood" id="mood_level" value="2" autocomplete="off"> (•́︿•̀) <br> รู้สึกแย่
                        </label>
                        <label class="btn btn-outline-warning btn-md">
                            <input type="radio" name="inputMood" id="mood_level" value="3" autocomplete="off"> ʕ•ᴥ•ʔ <br> ปกติ 
                        </label>
                        <label class="btn btn-outline-light btn-md">
                            <input type="radio" name="inputMood" id="mood_level" value="4" autocomplete="off"> (•‿•) <br> รู้สึกดี
                        </label>
                        <label class="btn btn-outline-success btn-md">
                            <input type="radio" name="inputMood" id="mood_level" value="5" autocomplete="off"> ◟(ˊᗨˋ)◞ <br> มีความสุขมาก
                        </label>
                    </div>
                </div>

                <div class="text-center">
                        <button type="submit" name="moodSubmit" id="changeSubmitColor" class="btn btn-dark btn-lg btn-block" disabled> ส่งคำตอบ</button>
                </div>

            </form> 
                <br>
                <br>
                <div class="text-center">
                    <button type="button" class="btn btn-dark btn-lg btn-block" onclick="returnHandling()" > กลับหน้าหลัก</button>
                </div>
            </div>   
        </div>
    </div>

    <script>

        function returnHandling() {
            window.location.href = "patientPage.php";
        }

        function goTo2Q() {
            window.location.href = "twoQ.php"
        }

        $(":radio").change(function() {
            var names = {};
            $(':radio').each(function() {
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { 
                count++;
            });
            if ($(':radio:checked').length === count) {
                $(':input[type="submit"]').prop('disabled', false);
                if($('#changeSubmitColor').hasClass("btn-dark")) {
                    $("#changeSubmitColor").removeClass("btn-dark").addClass("btn-primary");  
                }
                                 
            }
        }).change();
    </script>

    </body>
</html>