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
            <form method="post" action="../services/controller.php" class="col-8">
                <h2>My Mood Day</h2>
                <?php
                    if (isset($_GET['registerresult'])) {
                        if ($_GET['registerresult'] == "passwordnotmatch") {
                            echo "<div class='alert alert-danger' role='alert'> รหัสผ่านไม่ตรงกัน </div>";
                        } else if ($_GET['registerresult'] == "wrong") {
                            echo "<div class='alert alert-danger' role='alert'> การสมัครสมาชิกเกิดข้อผิดพลาด กรุณาลองอีกครั้ง </div>";
                        }
                    }
                ?>
                <div class="form-group">
                    <label for="registerUsername">เลขบัตรประชาชนผู้ใช้</label>
                    <p style="font-size: 13px; color:red;">*กรุณาตรวจสอบหมายเลขประจำตัวบัตรประชาชนให้ถูกต้องเพื่อให้ทีมแพทย์สามารถติดตามอาการได้อย่างรวดเร็ว</p>
                    <input type="text" class="form-control" id="registerUsername" name="registerUsername"  placeholder="ID Card">
                </div>
                <div class="form-group">
                    <label for="registerPassword">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">ยืนยันรหัสผ่าน</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-primary" name="register">ลงทะเบียน</button>
            </form>   
        </div>
    </div>

    <div class="footer">
            <div class="text-center">
                <small>ระบบนี้เป็นระบบที่พัฒนาขึ้นจากโครงงานร่วมระหว่าง<br>สาขาวิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์และเทคโนโลยี และภาควิชาจิตเวช คณะแพทย์ศาสตร์ มหาวิทยาลัยธรรมศาสตร์</small>
            </div>
    </div>

    </body>
</html>