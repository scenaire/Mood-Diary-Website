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

        <!-- for toggle -->
        <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    </head>

    <body>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <form method="post" action="../services/evaluate.php" class="col-10">
                <h3>แบบคัดกรองโรคซึมเศร้า 2 คำถาม</h3>
                <div class="progress">
                    <div class="progress-bar" style="width:0%"></div>
                </div>
                <br>
                <h6>ในระยะ 2 สัปดาห์ที่ผ่านมารวมถึงวันนี้ ท่านมีอาการดังต่อไปนี้หรือไม่</h6>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">1. รู้สึกหดหู่ เศร้า หรือท้อแท้สิ้นหวัง</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input2Q_1" id="input2Q_1" value="1" autocomplete="off" > ใช่
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input2Q_1" id="input2Q_1" value="0" autocomplete="off"> ไม่ใช่
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">2. รู้สึกเบื่อ ทำอะไรก็ไม่เพลิดเพลิน</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input2Q_2" id="input2Q_1" value="1" autocomplete="off" > ใช่
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input2Q_2" id="input2Q_1" value="0" autocomplete="off"> ไม่ใช่
                        </label>
                    </div>
                </div>

                <div class="text-center">
                        <button type="submit" name="twoQsubmit" class="btn btn-dark btn-lg btn-block" disabled> ส่งคำตอบ</button>
                </div>

            </form>   
        </div>
    </div>

    <script>
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
            }
        }).change();
    </script>

    </body>
</html>