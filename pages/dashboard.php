<?php

session_start();
include "allRequire.php";

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
}

if(!isset($_SESSION['username'])){
	header("location:../index.php");
}

if ($_SESSION['role'] == 2) {
    header("location:patientPage.php");
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

        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10">
                <div class="text-center">
                    <h2>ยินดีต้อนรับ</h2>
                    <h5>คุณ <?php echo $_SESSION['username']?></h5>
                </div>
                <br>
                <form method="post" action="../services/export.php">
                <h4>Export File แบบประเมิน</h4>
                    <?php 
                        if (isset($_GET['export_result'])) {
                            if ($_GET['export_result'] == "wrong") {
                                echo "<br><div class='alert alert-danger role='alert>
                                ไม่สามารถดึงข้อมูลได้ กรุณาตรวจสอบอีกครั้ง
                            </div>";
                            } 
                        }
                    
                    ?>
                    <br>
                    <input placeholder="กรุณาเลือกวันที่" id="datepicker1" type="text" autocomplete="off" name="dateExport" required/>
                    <br>
                    <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">กรุณาเลือกไฟล์ที่ท่านต้องการ export</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success btn-md">
                            <input type="radio" name="fileExport"  value="normal" autocomplete="off" required> แบบประเมินสุขภาพจิต 9Q8Q
                        </label>
                        <label class="btn btn-outline-success btn-md">
                            <input type="radio" name="fileExport" value="dass" autocomplete="off"> แบบประเมินสุขภาพใจ COVID-19
                        </label>
                    </div>
                    </div>
                    <button type="submit" name="exportSubmit" class="btn btn-primary btn-lg btn-block">ดาวน์โหลด</button>
                </form>

                <br>
                <br>
                <br>

                <form method="post" action="../services/export.php">
                <h4>Export File บันทึกอารมณ์</h4>
                <?php 
                        if (isset($_GET['mood_export'])) {
                            if ($_GET['mood_export'] == "wrongdate") {
                                echo "<br><div class='alert alert-danger role='alert>
                                วันที่ผิดพลาด กรุณาตรวจสอบอีกครั้ง
                            </div>";
                            } else if ($_GET['mood_export'] == "wrongresult") {
                                echo "<br><div class='alert alert-danger role='alert>
                                ไม่สามารถดึงข้อมูลได้ กรุณาตรวจสอบอีกครั้ง
                            </div>";
                            } 
                        }
                    
                    ?>
                <br>
                <div class="form-row">
                    <div class="col">
                        <label for="fromDate">ตั้งแต่วันที่</label>
                        <input placeholder="กรุณาเลือกวันที่" id="datepicker2" type="text" autocomplete="off" name="fromDate" required/>
                    </div>
                    <div class="col">
                        <label for="toDate">ถึงวันที่</label>
                        <input placeholder="กรุณาเลือกวันที่" id="datepicker3" type="text" autocomplete="off" name="toDate">
                    </div>
                </div>

                    <br>
                    <button type="submit" name="moodExportSubmit" class="btn btn-primary btn-lg btn-block">ดาวน์โหลด</button>
                </form>
                <br>
                <br>
                <div class="text-center">
                    <button type="button" class="btn btn-dark btn-lg btn-block" onclick="logOuthandling()" > ออกจากระบบ</button>
                </div>
            </div>   
        </div>
    </div>

    <script>

        
        $('#datepicker1').datepicker({
            format: 'yyyy-mm-dd',
            maxDate: new Date(),
            minDate: new Date('2020-03-26')
        });

        $('#datepicker2').datepicker({
            format: 'yyyy-mm-dd',
            maxDate: new Date(),
            minDate: new Date('2020-03-31')
        });

        $('#datepicker3').datepicker({
            format: 'yyyy-mm-dd',
            maxDate: new Date(),
            minDate: new Date('2020-03-31')
        });

        function logOuthandling() {
            window.location.href = "../services/controller.php?logout=yes";
        }

        function goTo2Q() {
            window.location.href = "twoQ.php"
        }
    </script>

    </body>
</html>