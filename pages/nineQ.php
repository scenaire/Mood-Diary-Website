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
        <div class="row  justify-content-center align-items-center">
            <form method="post" action="../services/evaluate.php?2Q=0" class="col-10">
                <h3>แบบประเมินระดับความรุนแรงของโรคซึมเศร้า 9 คำถาม</h3>
                <div class="progress">
                    <div class="progress-bar" style="width:0%"></div>
                </div>
                <br>
                <h6>ในระยะ 2 สัปดาห์ที่ผ่านมารวมถึงวันนี้ ท่านมีอาการต่อไปนี้บ่อยแค่ไหน</h6>
                <p style="font-family: 'saraban', sans-serif; font-size: 14px">เป็นบางวัน = ตั้งแต่ 1 - 7 วัน, เป็นบ่อย = ตั้งแต่ 8 - 13 วัน</p>

                <div class="form-group row">
                    <label for="input9Q_1" class="col-sm-6 col-form-label">1. เบื่อ ไม่สนใจอยากทำอะไร</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input9Q_1" id="input9Q_1" value="0" autocomplete="off" > ไม่มีเลย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_1" id="input9Q_1" value="1" autocomplete="off"> เป็นบางวัน
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_1" id="input9Q_1" value="2" autocomplete="off"> เป็นบ่อย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_1" id="input9Q_1" value="3" autocomplete="off"> เป็นทุกวัน
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input9Q_2" class="col-sm-6 col-form-label">2. ไม่สบายใจ ซึมเศร้า ท้อแท้</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input9Q_2" id="input9Q_2" value="0" autocomplete="off" > ไม่มีเลย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_2" id="input9Q_2" value="1" autocomplete="off"> เป็นบางวัน
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_2" id="input9Q_2" value="2" autocomplete="off"> เป็นบ่อย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_2" id="input9Q_2" value="3" autocomplete="off"> เป็นทุกวัน
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input9Q_3" class="col-sm-6 col-form-label">3. หลับยากหรือหลับ ๆ ตื่น ๆ หรือหลับมากไป</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input9Q_3" id="input9Q_3" value="0" autocomplete="off" > ไม่มีเลย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_3" id="input9Q_3" value="1" autocomplete="off"> เป็นบางวัน
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_3" id="input9Q_3" value="2" autocomplete="off"> เป็นบ่อย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_3" id="input9Q_3" value="3" autocomplete="off"> เป็นทุกวัน
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input9Q_4" class="col-sm-6 col-form-label">4. เหนื่อยง่ายหรือไม่ค่อยมีแรง</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input9Q_4" id="input9Q_4" value="0" autocomplete="off" > ไม่มีเลย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_4" id="input9Q_4" value="1" autocomplete="off"> เป็นบางวัน
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_4" id="input9Q_4" value="2" autocomplete="off"> เป็นบ่อย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_4" id="input9Q_4" value="3" autocomplete="off"> เป็นทุกวัน
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input9Q_5" class="col-sm-6 col-form-label">5. เบื่ออาหารหรือกินมากเกินไป</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input9Q_5" id="input9Q_5" value="0" autocomplete="off" > ไม่มีเลย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_5" id="input9Q_5" value="1" autocomplete="off"> เป็นบางวัน
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_5" id="input9Q_5" value="2" autocomplete="off"> เป็นบ่อย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_5" id="input9Q_5" value="3" autocomplete="off"> เป็นทุกวัน
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input9Q_6" class="col-sm-6 col-form-label">6. รู้สึกไม่ดีกับตัวเอง คิดว่าตัวเองล้มเหลวหรือครอบครัวผิดหวัง</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input9Q_6" id="input9Q_6" value="0" autocomplete="off" > ไม่มีเลย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_6" id="input9Q_6" value="1" autocomplete="off"> เป็นบางวัน
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_6" id="input9Q_6" value="2" autocomplete="off"> เป็นบ่อย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_6" id="input9Q_6" value="3" autocomplete="off"> เป็นทุกวัน
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input9Q_7" class="col-sm-6 col-form-label">7. สมาธิไม่ดี เวลาทำอะไร เช่น ดูโทรทัศน์ ฟังวิทยุ หรือทำงานที่ต้องใช้ความตั้งใจ</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input9Q_7" id="input9Q_7" value="0" autocomplete="off" > ไม่มีเลย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_7" id="input9Q_7" value="1" autocomplete="off"> เป็นบางวัน
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_7" id="input9Q_7" value="2" autocomplete="off"> เป็นบ่อย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_7" id="input9Q_7" value="3" autocomplete="off"> เป็นทุกวัน
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input9Q_8" class="col-sm-6 col-form-label">8. พูดช้า ทำอะไรช้าลงจนคนอื่นสังเกตเห็นได้ หรือกระสับกระส่ายไม่สามารถอยู่นิ่งได้เหมือนที่เคยเป็น</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input9Q_8" id="input9Q_8" value="0" autocomplete="off" > ไม่มีเลย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_8" id="input9Q_8" value="1" autocomplete="off"> เป็นบางวัน
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_8" id="input9Q_8" value="2" autocomplete="off"> เป็นบ่อย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_8" id="input9Q_8" value="3" autocomplete="off"> เป็นทุกวัน
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="input9Q_9" class="col-sm-6 col-form-label">9. คิดทำร้ายตนเอง หรือคิดว่าถ้าตายไปคงจะดี</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="input9Q_9" id="input9Q_9" value="0" autocomplete="off" > ไม่มีเลย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_9" id="input9Q_9" value="1" autocomplete="off"> เป็นบางวัน
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_9" id="input9Q_9" value="2" autocomplete="off"> เป็นบ่อย
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="input9Q_9" id="input9Q_9" value="3" autocomplete="off"> เป็นทุกวัน
                        </label>
                    </div>
                </div>

                <div class="text-center">
                        <button type="submit" name="nineQsubmit"  class="btn btn-dark btn-lg btn-block" disabled> ส่งคำตอบ</button>
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