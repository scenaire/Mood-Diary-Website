<?php

    session_start();
    include "../pages/allRequire.php";

    $_SESSION['LAST_ACTIVITY'] = time();

    if (isset($_POST['exportSubmit'])) {
        if ($_POST['fileExport'] == "normal") {

            createNormalFile($_POST['dateExport']);

        } else if ($_POST['fileExport'] == "dass") {

            createDassFile($_POST['dateExport']);

        }
    }

    if (isset($_POST['moodExportSubmit'])) {

        if (empty($_POST['toDate'])) { // ไม่มีวันที่สุดท้าย
            createMoodChartFile($_POST['fromDate'],$_POST['fromDate']);
        } else if ($_POST['toDate'] < $_POST['fromDate']) { // toDate มากกว่า fromDate
            header("location:../pages/dashboard.php?mood_export=wrongdate");
        } else { //ปกติ 
            createMoodChartFile($_POST['fromDate'], $_POST['toDate']);
        }
        

    }

    /****************************************Export Mood Chart */

    function createMoodChartFile($fromDate, $toDate) {
        $mood = new moodDB;
        $data = $mood->get_all_mood($fromDate, $toDate);

        if (!empty($data)) {
            if ($fromDate == $toDate) {
                $filename = "ไฟล์รายงานบันทึกอารมณ์ประจำวันที่ ".$fromDate.".csv";
            } else {
                $filename = "ไฟล์รายงานบันทึกอารมณ์ประจำวันที่ ".$fromDate." ถึงวันที่ ".$toDate.".csv";
            }
            
            header('Content-Encoding: UTF-8');
            header('Content-type: text/csv; charset=UTF-8');
            header("Content-Disposition: attachment; filename=$filename");
            echo "\xEF\xBB\xBF";

            $output = fopen("php://output", "w");

            //Title

            $header = ["รายงานบันทึกอารมณ์"];
            if ($fromDate == $toDate) {
                $subhead = ["วันที่รายงาน ", $fromDate ];
            } else {
                $subhead = ["วันที่รายงาน ", $fromDate, "ถึงวันที่ ",$toDate ];
            }

            fputcsv($output, $header);
            fputcsv($output, $subhead);
            fputcsv($output,[" "]);

            //Table Head

            $thead = ["ID"] ;

            $currentDate = $fromDate;

            while ($currentDate <= $toDate) {
                array_push($thead,$currentDate);
                $currentDate = date('Y-m-d',strtotime($currentDate . "+1 days"));
            }

            fputcsv($output, $thead);
            

            //Data

            /**************************find user set  -- หาว่ามีคนกี่คน */
            $user_set = array();
            $currentID = $data[0][0];
            array_push($user_set,$currentID);

            foreach ($data as $key) {
                if ($key['username'] != $currentID) {
                    array_push($user_set,$key['username']);
                    $currentID = $key['username'];
                }
            }

            $user_mood_set = array();
            $insideArr = array();

            foreach ($user_set as $id) {
    
                $found = false;
                $user_mood = $mood->get_user_mood_from_date($id,$fromDate,$toDate);
                array_push($insideArr,'="' . $id . '"');
            
                for ($i=1; $i<count($thead); $i++) {
                    for ($j=0; $j<count($user_mood); $j++) {
                        if ($thead[$i] == $user_mood[$j]['date']) {
                            array_push($insideArr,label_mood_level($user_mood[$j]['mood_level']));
                            $found = true;
                        } 
                    }
                    if (!$found) {
                        array_push($insideArr, " ");
                        $found = false;
                    }
                }
            
                array_push($user_mood_set,$insideArr);
                unset($insideArr);
                $insideArr = array();
            
            }

            foreach ($user_mood_set as $row) {
                fputcsv($output, $row);
            }


            fclose($output);


        } else {
            header("location:../pages/dashboard.php?mood_export=wrongresult");
        }
    }

    function label_mood_level ($level) {
        switch ($level) {
            case 1: return "เศร้ามาก";
            case 2: return "รู้สึกแย่";
            case 3: return "ปกติ";
            case 4: return "รู้สึกดี";
            case 5: return "มีความสุขมาก";
        }
    }


    /****************************************Export Evaluation */

    function createNormalFile($date) {

        $eva = new evaluateDB;
        $data = $eva->getNormalData($date);

        if (!empty($data)) {

            $filename = "ไฟล์รายงานการประเมินสุขภาพจิตประจำวันที่ ".$date.".csv";

            header('Content-Encoding: UTF-8');
            header('Content-type: text/csv; charset=UTF-8');
            header("Content-Disposition: attachment; filename=$filename");
            echo "\xEF\xBB\xBF";

            $output = fopen("php://output", "w");

            $header = ["รายงานการประเมินสุขภาพจิต"];
            $subhead = ["วันที่รายงาน", $date];

            fputcsv($output, $header);
            fputcsv($output, $subhead);

            $data = cleanArrayForNormal($data);

            $thead = array_keys($data[0]);
            fputcsv($output, $thead);

            foreach ($data as $row) {
                fputcsv($output, $row);
            }

            fclose($output);
        
        } else {
            header("location:../pages/dashboard.php?export_result=wrong");
        }

    }

    function createDassFile($date) {

        $eva = new evaluateDB;
        $data = $eva->getDassData($date);

        if (!empty($data)) {

            $filename = "ไฟล์รายงานการประเมินสุขภาพใจสำหรับผู้ได้รับผลกระทบ COVID-19 ประจำวันที่ ".$date.".csv";

            header('Content-Encoding: UTF-8');
            header('Content-type: text/csv; charset=UTF-8');
            header("Content-Disposition: attachment; filename=$filename");
            echo "\xEF\xBB\xBF";

            $output = fopen("php://output", "w");

            $header = ["รายงานการประเมินสุขภาพใจสำหรับผู้ได้รับผลกระทบ COVID-19"];
            $subhead = ["วันที่รายงาน", $date];

            fputcsv($output, $header);
            fputcsv($output, $subhead);

            $data = cleadArrayForDass($data);

            $thead = array_keys($data[0]);
            fputcsv($output, $thead);

            foreach ($data as $row) {
                fputcsv($output, $row);
            }

            fclose($output);
        
        } else {
            header("location:../pages/dashboard.php?export_result=wrong");
        }


    }

    function cleadArrayForDass($data) {

        $eva = new evaluateDB;

        $newArr = [];

        for ($i = 0; $i < count($data); $i++)  {

            $score = $eva->getDassTableScore($data[$i]['dass_table']);
        
            $newArr[$i]['ID'] =  '="' . $data[$i]['username'] . '"';
            $newArr[$i]['Time'] = $data[$i]['datetime'];
            $newArr[$i]['Q:1'] = $score['dass_1'];
            $newArr[$i]['Q:2'] = $score['dass_2'];
            $newArr[$i]['Q:3'] = $score['dass_3'];
            $newArr[$i]['Q:4'] = $score['dass_4'];
            $newArr[$i]['Q:5'] = $score['dass_5'];
            $newArr[$i]['Q:6'] = $score['dass_6'];
            $newArr[$i]['Q:7'] = $score['dass_7'];
            $newArr[$i]['Q:8'] = $score['dass_8'];
            $newArr[$i]['Q:9'] = $score['dass_9'];
            $newArr[$i]['Q:10'] = $score['dass_10'];
            $newArr[$i]['Q:11'] = $score['dass_11'];
            $newArr[$i]['Q:12'] = $score['dass_12'];
            $newArr[$i]['Q:13'] = $score['dass_13'];
            $newArr[$i]['Q:14'] = $score['dass_14'];
            $newArr[$i]['Q:15'] = $score['dass_15'];
            $newArr[$i]['Q:16'] = $score['dass_16'];
            $newArr[$i]['Q:17'] = $score['dass_17'];
            $newArr[$i]['Q:18'] = $score['dass_18'];
            $newArr[$i]['Q:19'] = $score['dass_19'];
            $newArr[$i]['Q:20'] = $score['dass_20'];
            $newArr[$i]['Q:21'] = $score['dass_21'];
            $newArr[$i]['space_1'] = " ";
            $newArr[$i]['Depress_Score'] = $data[$i]['depress_score'];
            $newArr[$i]['Depress_Result'] = getResultDepress($data[$i]['depress_score']);
            $newArr[$i]['Anxiety_Score'] = $data[$i]['anxiety_score'];
            $newArr[$i]['Anxiety_Result'] = getResultAnxiety($data[$i]['anxiety_score']);
            $newArr[$i]['Stress_Score'] = $data[$i]['stress_score'];
            $newArr[$i]['Stress_Result'] = getResultStress($data[$i]['stress_score']);
        }

        return $newArr;
    }

    function cleanArrayForNormal($data) {

        $eva = new evaluateDB;


        $newArr = [];

        for ($i = 0; $i < count($data); $i++)  {

            $score = $eva->getNormalTableScore($data[$i]['table_score']);
    
            $newArr[$i]['ID'] = '="' . $data[$i]['username'] . '"';
            $newArr[$i]['Time'] = $data[$i]['datetime'];
            // $newArr[$i]['2Q:1'] = $score['2q_1'];
            // $newArr[$i]['2Q:2'] = $score['2q_2'];
            // $newArr[$i]['2Q:Result'] = $data[$i]['2q'];
            // $newArr[$i]['2Q:Result_2'] = getResult2Q($data[$i]['2q']);
            // $newArr[$i]['space_1'] = " ";
            $newArr[$i]['9Q:1'] = $score['9q_1'];
            $newArr[$i]['9Q:2'] = $score['9q_2'];
            $newArr[$i]['9Q:3'] = $score['9q_3'];
            $newArr[$i]['9Q:4'] = $score['9q_4'];
            $newArr[$i]['9Q:5'] = $score['9q_5'];
            $newArr[$i]['9Q:6'] = $score['9q_6'];
            $newArr[$i]['9Q:7'] = $score['9q_7'];
            $newArr[$i]['9Q:8'] = $score['9q_8'];
            $newArr[$i]['9Q:9'] = $score['9q_9'];
            $newArr[$i]['9Q:Result'] = $data[$i]['9q'];
            $newArr[$i]['9Q:Result_2'] = getResult9Q($data[$i]['9q']);
            $newArr[$i]['space'] = " ";
            $newArr[$i]['8Q:1'] = $score['8q_1'];
            $newArr[$i]['8Q:2'] = $score['8q_2'];
            $newArr[$i]['8Q:3_1'] = $score['8q_3'];
            $newArr[$i]['8Q:3_2'] = $score['8q_4'];
            $newArr[$i]['8Q:4'] = $score['8q_5'];
            $newArr[$i]['8Q:5'] = $score['8q_6'];
            $newArr[$i]['8Q:6'] = $score['8q_7'];
            $newArr[$i]['8Q:7'] = $score['8q_8'];
            $newArr[$i]['8Q:8'] = $score['8q_9'];
            $newArr[$i]['8Q:Result'] = $data[$i]['8q'];
            $newArr[$i]['8Q:Result_2'] = getResult8Q($data[$i]['8q']);
    }

        return $newArr;
    }

    function getResult2Q($score) {
        if ($score > 0) {
            return "มีความเสี่ยง";
        } else if ($score == 0) {
            return "ไม่มีความเสี่ยง";
        }
    }

    function getResult9Q($score) {
        if ($score < 7) {
            return "ไม่มีอาการหรือน้อยมาก";
        } else if ($score >= 7 && $score < 13) {
            return "ระดับน้อย";
        } else if ($score >= 13 && $score < 19) {
            return "ระดับปานกลาง";
        } else if ($score >= 19) {
            return "ระดับรุนแรง";
        }
    }

    function getResult8Q($score) {
        if ($score == 0) {
            return "ไม่มีแนวโน้มฆ่าตัวตาย";
        } else if ($score >= 1 && $score < 9) {
            return "ระดับน้อย";
        } else if ($score >= 9 && $score < 17) {
            return "ระดับปานกลาง";
        } else if ($score >= 17) {
            return "ระดับรุนแรง";;
        }
    }

    function getResultDepress($depress) {
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
        return $depress_msg;
    }

    function getResultAnxiety($anxiety) {
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
        return $anxiety_msg;
    }

    function getResultStress($stress) {
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
        return $stress_msg;
    }

?>