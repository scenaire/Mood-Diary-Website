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

    <div class="container ">
        <div class="row justify-content-center align-items-center">
            <form method="post" action="../services/evaluate.php?2Q=<?php echo $_GET['2Q']?>&9Q=<?php echo $_GET['9Q']?>" class="col-10">
                <h3>แบบประเมินการฆ่าตัวตาย 8 คำถาม</h3>
                <div class="progress">
                    <div class="progress-bar" style="width:0%"></div>
                </div>
                <br>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">1. ท่านคิดอยากตาย หรือ คิดว่าตายไปจะดีกว่า</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input8Q_1" id="input8Q_1" value="1" autocomplete="off" > มี
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input8Q_1" id="input8Q_1" value="0" autocomplete="off"> ไม่มี
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">2. ท่านอยากทำร้ายตัวเอง หรือ ทำให้ตัวเองบาดเจ็บ</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input8Q_2" id="input8Q_2" value="2" autocomplete="off" > มี
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input8Q_2" id="input8Q_2" value="0" autocomplete="off"> ไม่มี
                        </label>
                    </div>
                </div>

                <h6><mark>คำถามข้อ 3 - 5</mark> จะถามเกี่ยวกับความรู้สึกของท่านในระยะ 1 เดือนที่ผ่านมารวมวันนี้</h6>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">3. ท่านคิดเกี่ยวกับการฆ่าตัวตาย</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input8Q_3" id="input8Q_3" value="6" autocomplete="off" > มี
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input8Q_3" id="input8Q_3" value="0" autocomplete="off"> ไม่มี
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">หากท่านคิดเกี่ยวกับการฆ่าตัวตาย ท่านสามารถควบคุมความอยากฆ่าตัวตายที่ท่านคิดอยู่นั้นได้หรือไม่ หรือ บอกได้ไหมว่าคงจะไม่ทำตามความคิดนั้นในขณะนี้ (หากไม่ได้คิดเกี่ยวกับการฆ่าตัวตายกรุณาตอบ 'ได้')</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input8Q_4" id="input8Q_1" value="0" autocomplete="off" > ได้
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input8Q_4" id="input8Q_1" value="8" autocomplete="off" > ไม่ได้
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">4. ท่านมีแผนการที่จะฆ่าตัวตาย</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input8Q_5" id="input8Q_1" value="8" autocomplete="off" > มี
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input8Q_5" id="input8Q_1" value="0" autocomplete="off"> ไม่มี
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">5. ท่านได้เตรียมการที่จะทำร้ายตนเองหรือเตรียมการจะฆ่าตัวตายโดยตั้งใจว่าจะให้ตายจริง ๆ</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input8Q_6" id="input8Q_1" value="9" autocomplete="off" > มี
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input8Q_6" id="input8Q_1" value="0" autocomplete="off"> ไม่มี
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">6. ท่านได้ทำให้ตนเองบาดเจ็บ แต่ไม่ตั้งใจที่จะทำให้เสียชีวิต</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input8Q_7" id="input8Q_1" value="4" autocomplete="off" > มี
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input8Q_7" id="input8Q_1" value="0" autocomplete="off"> ไม่มี
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">7. ท่านได้พยายามฆ่าตัวตายโดยคาดหวัง/ตั้งใจที่จะให้ตาย</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input8Q_8" id="input8Q_1" value="10" autocomplete="off" > มี
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input8Q_8" id="input8Q_1" value="0" autocomplete="off"> ไม่มี
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input2Q_1" class="col-sm-6 col-form-label">8. ตลอดชีวิตที่ผ่านมา ท่านเคยพยายามฆ่าตัวตาย</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input8Q_9" id="input8Q_1" value="4" autocomplete="off" > มี
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input8Q_9" id="input8Q_1" value="0" autocomplete="off"> ไม่มี
                        </label>
                    </div>
                </div>



                <div class="text-center">
                        <button type="submit" name="eightQsubmit" class="btn btn-dark btn-lg btn-block" disabled> ส่งคำตอบ</button>
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