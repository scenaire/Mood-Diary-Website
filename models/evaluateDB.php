<?php

    class evaluateDB {

        public function addToDB($username, $twoQ, $nineQ, $eightQ, $date,$table) {
            require "db.php";

            $username = mysqli_real_escape_string($con,$username);

            $date = new Datetime($date, new DateTimeZone('UTC'));
            $date = $date->setTimeZone(new DateTimeZone('Asia/Bangkok'));
            $dt = $date->format('Y-m-d H:i:s');
            $d = $date->format('Y-m-d');

            $sql = "INSERT INTO evaluate (username,2q,9q,8q,date,datetime,table_score)
            VALUES('$username','$twoQ','$nineQ','$eightQ','$d','$dt','$table')";

            if ($con->query($sql)===true) {
                 return true;
            } 
            
            return false;

            $con->close();
        }

        public function addToDass($username, $depress_score, $anxiety_score, $stress_score, $date, $table) {
            require "db.php";

            $username = mysqli_real_escape_string($con,$username);

            $date = new Datetime($date, new DateTimeZone('UTC'));
            $date = $date->setTimeZone(new DateTimeZone('Asia/Bangkok'));
            $dt = $date->format('Y-m-d H:i:s');
            $d = $date->format('Y-m-d');

            $sql = "INSERT INTO evaluatedass (username,depress_score,anxiety_score,stress_score,date,datetime,dass_table)
            VALUES('$username','$depress_score','$anxiety_score','$stress_score','$d','$dt','$table')";

            if ($con->query($sql)===true) {
                return true;
            } 

            return false;

            $con->close();

        }

        public function getNormalData($date) {
            require "db.php";
            $sql = "SELECT * FROM evaluate WHERE date = '$date' ORDER BY username ";
            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            return $arr;
        }

        public function getNormalTableScore ($table) {
            require "db.php";
            $sql = "SELECT * FROM normal_score WHERE number = '$table'";
            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            return $arr[0];
        }

        public function getDassData($date) {
            require "db.php";
            $sql = "SELECT * FROM evaluatedass WHERE date = '$date' ORDER BY username ";
            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            return $arr;
        }

        public function getDassTableScore ($table) {
            require "db.php";

            $sql = "SELECT * FROM dass_score WHERE number = '$table'";
            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            return $arr[0];

        }

        public function insertDass ($table, $score_arr) {
            require "db.php";

            $cell = ["dass_1","dass_2","dass_3","dass_4","dass_5","dass_6","dass_7","dass_8","dass_9","dass_10","dass_11","dass_12","dass_13","dass_14","dass_15","dass_16","dass_17","dass_18","dass_19","dass_20","dass_21"];

            for ($i=0; $i<count($cell); $i++) {
                $sql_score = "UPDATE dass_score SET ".$cell[$i]." = '".$score_arr[$i]."' WHERE number = '$table'";
                if ($con->query($sql_score)===true) {
                    
                } else {
                    return false;
                }
                
            }

            $con->close();
        
        }

        public function getLastDateDass ($username) {
            require "db.php";

            $sql = "SELECT date FROM evaluatedass WHERE username = '$username' ORDER BY date DESC LIMIT 1";
            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            if (!empty($arr)) {
                return $arr[0][0];
            } else {
                return false;
            }
        }

        public function createFirstRowDass($username) {
            require "db.php";

            $sql = "INSERT INTO dass_score (username) VALUES('$username')";
            if ($con->query($sql)===true) {
                return true;
            }  else {
                return false;
            }
        }

        public function createFirstRow($username) {
            require "db.php";

            $sql = "INSERT INTO normal_score (username) VALUES('$username')";
            if ($con->query($sql)===true) {
                return true;
            }  else {
                return false;
            }
        }

        public function insert2Q($table, $score_arr) {
            require "db.php";

            $cell = ["2q_1","2q_2"];

            for ($i=0; $i<count($cell); $i++) {
                $sql_score = "UPDATE normal_score SET ".$cell[$i]." = '".$score_arr[$i]."' WHERE number = '$table'";
                if ($con->query($sql_score)===true) {
                    
                } else {
                    return false;
                }
                
            }

            $con->close();

        }

        public function insert9Q($table, $score_arr) {
            require "db.php";

            $cell = ["9q_1","9q_2","9q_3","9q_4","9q_5","9q_6","9q_7","9q_8","9q_9"];

            for ($i=0; $i<count($cell); $i++) {
                $sql_score = "UPDATE normal_score SET ".$cell[$i]." = '".$score_arr[$i]."' WHERE number = '$table'";
                if ($con->query($sql_score)===true) {
                    
                } else {
                    return false;
                }
                
            }

            $con->close();

        }

        public function insert8Q($table, $score_arr) {
            require "db.php";

            $cell = ["8q_1","8q_2","8q_3","8q_4","8q_5","8q_6","8q_7","8q_8","8q_9"];

            for ($i=0; $i<count($cell); $i++) {
                $sql_score = "UPDATE normal_score SET ".$cell[$i]." = '".$score_arr[$i]."' WHERE number = '$table'";
                if ($con->query($sql_score)===true) {
                    
                } else {
                    return false;
                }
                
            }

            $con->close();

        }

        public function getLastRow($username) {
            require "db.php";

            $sql = "SELECT number FROM normal_score WHERE username = '$username' ORDER BY number DESC ";

            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            return $arr[0][0];
        }
        
        public function getLastRowDass($username) {
            require "db.php";

            $sql = "SELECT number FROM dass_score WHERE username = '$username' ORDER BY number DESC";

            $run_query = mysqli_query($con, $sql);
            $arr = array();
            while ($data = mysqli_fetch_array($run_query)) {
                $arr[] = $data;
            }
            return $arr[0][0];
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


    }

?>