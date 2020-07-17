<?php

session_start();
include "allRequire.php";

if(!isset($_SESSION['username'])){
	header("location:../index.php");
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
                    <h4>ผลแบบประเมินสุขภาพใจสำหรับผู้ได้รับผลกระทบ COVID-19</h4>
                    <div class="progress">
                        <div class="progress-bar" style="width:0%"></div>
                    </div>
                    <br>
                    

                    <?php 

                        //initial
                            $depress = $_GET['depress'];
                            $anxiety = $_GET['anxiety'];
                            $stress = $_GET['stress'];
                    
                        //Depress
                            if ($depress >= 0 && $depress < 5) {
                                $depress_msg = "ปกติ";
                            } else if ($depress >= 5 && $depress < 7) {
                                $depress_msg = "เล็กน้อย";
                            } else if ($depress >= 7 && $depress < 11) {
                                $depress_msg = "ปานกลาง";
                            } else if ($depress >= 11 && $depress < 14) {
                                $depress_msg = "สูง";
                            } else if ($depress >= 14) {
                                $depress_msg = "รุนแรง";
                            }

                        //Anxiety
                            if ($anxiety >= 0 && $anxiety < 4) {
                                $anxiety_msg = "ปกติ";
                            } else if ($anxiety >= 4 && $anxiety < 6) {
                                $anxiety_msg = "เล็กน้อย";
                            } else if ($anxiety >= 6 && $anxiety < 8) {
                                $anxiety_msg = "ปานกลาง";
                            } else if ($anxiety >= 8 && $anxiety < 10) {
                                $anxiety_msg = "สูง";
                            } else if ($anxiety >= 10) {
                                $anxiety_msg = "รุนแรง";
                            }

                        //Stress
                            if ($stress >= 0 && $stress < 8) {
                                $stress_msg = "ปกติ";
                            } else if ($stress >= 8 && $stress < 10) {
                                $stress_msg = "เล็กน้อย";
                            } else if ($stress >= 10 && $stress < 13) {
                                $stress_msg = "ปานกลาง";
                            } else if ($stress >= 13 && $stress < 17) {
                                $stress_msg = "สูง";
                            } else if ($stress >= 17) {
                                $stress_msg = "รุนแรง";
                            }
                        
                    
                    ?>

                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">  </th>
                                    <th scope="col">คะแนน</th>
                                    <th scope="col">ระดับความรุนแรง</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">ภาวะซึมเศร้า</th>
                                    <td><?php echo $depress?></td>
                                    <td><?php echo $depress_msg?></td>
                                </tr>
                                <tr>
                                    <th scope="row">ภาวะวิตกกังวล</th>
                                    <td><?php echo $anxiety?></td>
                                    <td><?php echo $anxiety_msg?></td>
                                </tr>
                                <tr>
                                    <th scope="row">ความเครียด</th>
                                    <td><?php echo $stress?></td>
                                    <td><?php echo $stress_msg?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <button type='button' class='btn btn-primary btn-lg btn-block' onclick='goTo9Q()' >ทำแบบประเมิน 9Q</button>
                </div>
            </div>   
        </div>
    </div>

    <script>
        function goTo9Q() {
            window.location.href = "nineQ.php";
        }
    </script>

    </body>
</html>