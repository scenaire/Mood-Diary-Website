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
            <form method="post" action="../services/evaluate.php" class="col-10">
                <h3>แบบประเมินสุขภาพใจสำหรับผู้ได้รับผลกระทบ Covid-19</h3>
                <div class="progress">
                    <div class="progress-bar" style="width:0%"></div>
                </div>
                <br>
                <h6> โปรดระบุข้อความที่ตรงกับความรู้สึกของท่านมากที่สุด</h6>
                <p style="font-family: 'sarabun', sans-serif;">0 ไม่ตรงกับฉันเลย</p>
                <p style="font-family: 'sarabun', sans-serif;">1 ตรงกับฉันบ้าง หรือเกิดขึ้นเป็นบางครั้ง</p>
                <p style="font-family: 'sarabun', sans-serif;">2 ตรงกับฉัน หรือเกิดขึ้นบ่อย</p>
                <p style="font-family: 'sarabun', sans-serif;">3 ตรงกับฉันมาก หรือเกิดขึ้นบ่อยมากที่สุด</p>

                <br>

                <div class="form-group row">
                    <label for="inputDassQ_1" class="col-sm-6 col-form-label">1. ฉันรู้สึกยากที่จะสงบจิตใจลง</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputStress_1" id="inputDassQ_1" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_1" id="inputDassQ_1" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_1" id="inputDassQ_1" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_1" id="inputDassQ_1" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_2" class="col-sm-6 col-form-label">2. ฉันรู้สึกปากแห้งคอแห้ง</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputAnxiety_1" id="inputDassQ_2" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_1" id="inputDassQ_2" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_1" id="inputDassQ_2" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_1" id="inputDassQ_2" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_3" class="col-sm-6 col-form-label">3. ฉันแทบไม่รู้สึกอะไรดี ๆ เลย</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputDepress_1" id="inputDassQ_3" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_1" id="inputDassQ_3" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_1" id="inputDassQ_3" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_1" id="inputDassQ_3" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_4" class="col-sm-6 col-form-label">4. ฉันมีอาการหายใจผิดปกติ (เช่น หายใจเร็วเกินเหตุ หายใจไม่ทันแม้ว่าจะไม่ได้ออกแรง)</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputAnxiety_2" id="inputDassQ_4" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_2" id="inputDassQ_4" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_2" id="inputDassQ_4" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_2" id="inputDassQ_4" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_5" class="col-sm-6 col-form-label">5. ฉันพบว่ามันยากที่จะคิดริเริ่มทำสิ่งใดสิ่งหนึ่ง</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputDepress_2" id="inputDassQ_5" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_2" id="inputDassQ_5" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_2" id="inputDassQ_5" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_2" id="inputDassQ_5" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_6" class="col-sm-6 col-form-label">6. ฉันมีแนวโน้มที่จะตอบสนองเกินเหตุต่อสถานการณ์</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputStress_2" id="inputDassQ_6" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_2" id="inputDassQ_6" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_2" id="inputDassQ_6" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_2" id="inputDassQ_6" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_7" class="col-sm-6 col-form-label">7. ฉันรู้สึกว่าร่างกายบางส่วนสั่นผิดปกติ (เช่น มือสั่น)</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputAnxiety_3" id="inputDassQ_7" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_3" id="inputDassQ_7" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_3" id="inputDassQ_7" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_3" id="inputDassQ_7" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_8" class="col-sm-6 col-form-label">8. ฉันรู้สึกเสียพลังงานไปมากกับการคิดกังวล</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputStress_3" id="inputDassQ_8" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_3" id="inputDassQ_8" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_3" id="inputDassQ_8" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_3" id="inputDassQ_8" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">9. ฉันรู้สึกกังวลกับเหตุการณ์ที่อาจทำให้ฉันรู้สึกตื่นกลัวและกระทำบางสิ่งที่น่าอับอาย</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputAnxiety_4" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_4" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_4" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_4" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">10. ฉันรู้สึกไม่มีเป้าหมายในชีวิต</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputDepress_3" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_3" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_3" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_3" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">11. ฉันรู้สึกกระวนกระวายใจ</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputStress_4" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_4" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_4" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_4" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">12. ฉันรู้สึกยากที่จะผ่อนคลายตัวเอง</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputStress_5" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_5" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_5" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_5" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">13. ฉันรู้สึกจิตใจเหงาหงอยเศร้าซึม</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputDepress_4" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_4" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_4" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_4" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">14. ฉันรู้สึกทนไม่ได้เวลามีอะไรมาขัดขวางสิ่งที่ฉันกำลังทำอยู่</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputStress_6" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_6" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_6" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_6" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">15. ฉันรู้สึกคล้ายจะมีอาการตื่นตระหนก</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputAnxiety_5" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_5" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_5" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_5" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">16. ฉันรู้สึกไม่มีความกระตือรือร้นต่อสิ่งใด</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputDepress_5" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_5" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_5" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_5" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">17. ฉันรู้สึกเป็นคนไม่มีคุณค่า</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputDepress_6" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_6" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_6" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_6" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">18. ฉันรู้สึกค่อนข้างฉุนเฉียวง่าย</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputStress_7" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_7" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_7" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputStress_7" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">19. ฉันรับรู้ถึงการทำงานของหัวใจแม้ในตอนที่ฉันไม่ได้ออกแรง (เช่น รู้สึกว่าหัวใจเต้นเร็วขึ้นหรือเต้นไม่เป็นจังหวะ)</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputAnxiety_6" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_6" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_6" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_6" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">20. ฉันรู้สึกกลัวโดยไม่มีเหตุผล</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputAnxiety_7" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_7" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_7" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputAnxiety_7" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputDassQ_9" class="col-sm-6 col-form-label">21. ฉันรู้สึกว่าชีวิตไม่มีความหมาย</label>
                    <div class="col-sm-6 btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary btn-md ">
                            <input type="radio" name="inputDepress_7" id="inputDassQ_9" value="0" autocomplete="off" > 0
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_7" id="inputDassQ_9" value="1" autocomplete="off"> 1
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_7" id="inputDassQ_9" value="2" autocomplete="off"> 2
                        </label>
                        <label class="btn btn-outline-primary btn-md">
                            <input type="radio" name="inputDepress_7" id="inputDassQ_9" value="3" autocomplete="off"> 3
                        </label>
                    </div>
                </div>

                <div class="text-center">
                        <button type="submit" name="dassQsubmit"  class="btn btn-dark btn-lg btn-block" disabled> ส่งคำตอบ</button>
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