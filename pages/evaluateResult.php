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
            <div class="col-10">
                <div class="text-center">
                    <?php 
                        if (isset($_GET['result'])) {
                           if ($_GET['result'] == "2q") {
                               echo "<h4>ผลแบบคัดกรองผู้ป่วยซึมเศร้า 2 คำถาม</h4>";
                               echo "<br>";

                               echo "<h5>คะแนนของคุณคือ ".$_GET['2Q']." คะแนน</h5>";

                               if ($_GET['2Q'] > 0) {
                                   echo "<h2>คุณมีความเสี่ยงเป็นโรคซึมเศร้า</h2>";
                                   echo "<br>";
                                   echo "<p style='color:grey;'>กดปุ่มด้านล่างเพื่อทำแบบประเมินความรุนแรงของโรค 9 คำถาม</p>";
                                   echo "<br>";
                                   echo "<button type='button' class='btn btn-primary btn-lg btn-block' onclick='goTo9Q(".$_GET['2Q'].")' >ต่อไป</button>";
                               } else {
                                    echo "<h2>คุณไม่มีความเสี่ยงเป็นโรคซึมเศร้า</h2>";
                                    echo "<br>";
                                    echo "<button type='button' class='btn btn-primary btn-lg btn-block' onclick='goTohomepage()' >กลับหน้าหลัก</button>";
                               }
                           }
                           else if ($_GET['result'] == "9q") {
                                echo "<h4>ผลแบบประเมินระดับความรุนแรงของโรคซึมเศร้า 9 คำถาม</h4>";
                                echo "<br>";

                                echo "<h5>คะแนนของคุณคือ ".$_GET['9Q']." คะแนน</h5>";

                                if ($_GET['9Q'] < 7) {
                                    echo "<h2>คุณไม่มีอาการของโรคซึมเศร้าหรือมีอาการของโรคซึมเศร้าระดับน้อยมาก</h2>";
                                    echo "<br>";
                                    echo "<button type='button' class='btn btn-outline-primary btn-lg btn-block' onclick='goTohomepage()' >กลับหน้าหลัก</button>";
                                } else {
                                    if ($_GET['9Q'] >= 7 && $_GET['9Q'] < 13) {
                                        echo "<h2>คุณมีอาการของโรคซึมเศร้า <br>ระดับน้อย</h2>";
                                    } else if ($_GET['9Q'] >= 13 && $_GET['9Q'] < 19) {
                                        echo "<h2>คุณมีอาการของโรคซึมเศร้า <br>ระดับปานกลาง</h2>";
                                    } else if ($_GET['9Q'] >= 19) {
                                        echo "<h2>คุณมีอาการของโรคซึมเศร้า <br>ระดับรุนแรง</h2>";
                                    }

                                    echo "<br>";
                                    echo "<p style='color:grey;'>กดปุ่มด้านล่างเพื่อทำแบบประเมินแนวโน้มการฆ่าตัวตาย 8 คำถาม</p>";
                                    echo "<br>";
                                    echo "<button type='button' class='btn btn-primary btn-lg btn-block' onclick='goTo8Q(".$_GET['2Q'].",".$_GET['9Q'].")' >ต่อไป</button>";
                                }

                                
                           }
                           else if ($_GET['result'] == "8q") {
                                echo "<h4>ผลแบบประเมินแนวโน้มการฆ่าตัวตาย 8 คำถาม</h4>";
                                echo "<br>";

                                echo "<h5>คะแนนของคุณคือ ".$_GET['8Q']." คะแนน</h5>";

                                if ($_GET['8Q'] == 0) {
                                    echo "<h2>คุณไม่มีแนวโน้มในการฆ่าตัวตายในปัจจุบัน</h2>";
                                } else if ($_GET['8Q'] >= 1 && $_GET['8Q'] < 9) {
                                    echo "<h2>คุณมีแนวโน้มที่จะฆ่าตัวตายในปัจจุบัน  <br>ระดับน้อย</h2>";
                                } else if ($_GET['8Q'] >= 9 && $_GET['8Q'] < 17) {
                                    echo "<h2>คุณมีแนวโน้มที่จะฆ่าตัวตายในปัจจุบัน  <br>ระดับปานกลาง</h2>";
                                } else if ($_GET['8Q'] >= 17) {
                                    echo "<h2>คุณมีแนวโน้มที่จะฆ่าตัวตายในปัจจุบัน <br>ระดับรุนแรง</h2>";
                                }

                                echo "<br>";
                                echo "<button type='button' class='btn btn-primary btn-lg btn-block' onclick='goTohomepage()' >กลับหน้าหลัก</button>";
                           }
                        } else {
                            header("location:../index.php");
                        }
                    
                    ?>
                </div>
                <br>
            </div>   
        </div>
    </div>

    <script>
        function goTo9Q(twoQResult) {
            window.location.href = "nineQ.php?2Q=" + twoQResult;
        }

        function goTo8Q(twoQResult, nineQResult) {
            window.location.href = "eightQ.php?2Q=" + twoQResult +"&9Q=" + nineQResult;
        }

        function goTohomepage() {
            window.location.href = "../index.php";
        }
    </script>

    </body>
</html>