<?php

    class moodDB {

        public function initial($username) {

            require "db.php";

            $date = gmdate('Y-m-d H:i:s');
            $date = new Datetime($date, new DateTimeZone('UTC'));
            $date = $date->setTimeZone(new DateTimeZone('Asia/Bangkok'));
            $dt = $date->format('Y-m-d');

            $sql = "INSERT INTO mood (username,date)
            VALUES('$username', '$dt')";

            if ($con->query($sql)===true) {
                for ($i=0; $i<45; $i++) {
                    $date = date_modify($date, "+1 day");
                    $dt = $date->format('Y-m-d');
                    $sql = "INSERT INTO mood (username,date)
                    VALUES('$username', '$dt')";
                    if ($con->query($sql) === true) {

                    } else {
                         return false;
                    }
                }
                return true;
            } 

            return false;

            $con->close();

        }

        public function updateMood($username, $mood_level) {
            require "db.php";

            $date = gmdate('Y-m-d H:i:s');
            $date = new Datetime($date, new DateTimeZone('UTC'));
            $date = $date->setTimeZone(new DateTimeZone('Asia/Bangkok'));
            $dt = $date->format('Y-m-d');

            $sql = "UPDATE mood SET mood_level = '$mood_level' WHERE username = '$username' AND date = '$dt'";
            if ($con->query($sql)===true) {
                return true;
            } else {
                return false;
            }
        
        
        }

        public function check_initial($username) {
            require "db.php";

            $username = mysqli_real_escape_string($con,$username);

            $sql = "SELECT * FROM mood WHERE username = '$username'";
            $run_query = mysqli_query($con, $sql);
            $result = mysqli_fetch_array($run_query);
            if (!$result) {
                return false;
            } else {
                return true;
            }
        }


        public function get_mood_by_user ($username) {  //for print on result page
            require "db.php";

            $username = mysqli_real_escape_string($con,$username);

            $sql = "SELECT * FROM mood WHERE username = '$username'";

            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            return $this->clean_array_for_user($arr);
        }

        public function get_user_mood_from_date ($username, $start_date, $end_date) {
            require "db.php";

            $sql = "SELECT mood_level, date FROM mood WHERE username = '$username' AND date BETWEEN '$start_date' AND '$end_date' ";

            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            return $arr;
        }


        public function get_all_mood ($start_date, $end_date) { //for print on export file to doctor
            require "db.php";

            $sql = "SELECT username FROM mood WHERE date BETWEEN '$start_date' AND '$end_date' ";

            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            return $arr;
        }


        //Utility

        public function clean_array_for_user($arr) {
            
            $newArr = [];

            for ($i = 0; $i < count($arr) ; $i++) {
                $newArr[$i]['date'] = $arr[$i]['date'];
                $newArr[$i]['mood_level'] = $arr[$i]['mood_level'];
            }

            return $newArr;
        }


        public function getThaiDate($date) {
            $date = new Datetime($date, new DateTimeZone('Asia/Bangkok'));
            $dt = $date->format('Y-m-d');
            $arr = explode('-',$dt);

            $year = $arr[0]+543;
            $month = "";
            switch ($arr[1]) {
                case 1: $month = "มกราคม"; break;
                case 2: $month = "กุมภาพันธ์"; break;
                case 3: $month = "มีนาคม"; break;
                case 4: $month = "เมษายน"; break;
                case 5: $month = "พฤษภาคม"; break;
                case 6: $month = "มิถุนายน"; break;
                case 7: $month = "กรกฎาคม"; break;
                case 8: $month = "สิงหาคม"; break;
                case 9: $month = "กันยายน"; break;
                case 10: $month = "ตุลาคม"; break;
                case 11: $month = "พฤศจิกายน"; break;
                case 12: $month = "ธันวาคม"; break;
            }

            return $arr[2]." ".$month." ".$year;

        }

        public function getDayDate($date) {
            $date = new Datetime($date, new DateTimeZone('Asia/Bangkok'));
            $dt = $date->format('Y-m-d');
            $arr = explode('-',$dt);

            return $arr[2];
        }

        public function getMonthDate($date) {
            $date = new Datetime($date, new DateTimeZone('Asia/Bangkok'));
            $dt = $date->format('Y-m-d');
            $arr = explode('-',$dt);

            $year = $arr[1];
            $month = "";
            switch ($arr[1]) {
                case 1: $month = "มกราคม"; break;
                case 2: $month = "กุมภาพันธ์"; break;
                case 3: $month = "มี.ค."; break;
                case 4: $month = "เม.ย."; break;
                case 5: $month = "พ.ค."; break;
                case 6: $month = "มิถุนายน"; break;
                case 7: $month = "กรกฎาคม"; break;
                case 8: $month = "สิงหาคม"; break;
                case 9: $month = "กันยายน"; break;
                case 10: $month = "ตุลาคม"; break;
                case 11: $month = "พฤศจิกายน"; break;
                case 12: $month = "ธันวาคม"; break;
            }

            return $month;

        }

        

    }



?>