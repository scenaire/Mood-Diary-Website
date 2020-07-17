<?php

    class users {

        public function register_patient ($username, $password) {
            require "db.php";

            $username = mysqli_real_escape_string($con,$username);
            $password = mysqli_real_escape_string($con,$password);

            $hashed_password = $this->hashed($password);

            $sql_user = "INSERT INTO Users (username,password,mode)
            VALUES('$username','$hashed_password',2)";

            $sql_patient = "INSERT INTO patient (username,register_date,status)
            VALUES('$username',CURRENT_TIMESTAMP,0)";

            if ($con->query($sql_user)===true) {
                 if ($con->query($sql_patient)===true) {
                     return true;
                 }
            } 
            
            return false;

            $con->close();
        }

        public function check_login ($username, $password) {
            include "db.php";

            $username = mysqli_real_escape_string($con,$username);
            $password = mysqli_real_escape_string($con,$password);

            $hashed_password = $this->hashed($password);

            $sql = "SELECT * FROM Users WHERE username = '$username' AND password = '$hashed_password'";
            $run_query = mysqli_query($con, $sql);
            $result = mysqli_fetch_array($run_query);
            if (!$result) {
                return false;
            } else {
                return true;
            }
        }

        public function check_login_for_patient ($username) {
            include "db.php";

            $username = mysqli_real_escape_string($con,$username);
            $sql = "SELECT * FROM Users WHERE username = '$username'";
            $run_query = mysqli_query($con, $sql);
            $result = mysqli_fetch_array($run_query);
            if (!$result) {
                return false;
            } else {
                return true;
            }
        }

        //utilities


        function hashed ($password) {
            return hash("sha512", $password);
        }

        public function check_role ($username) {
            include "db.php";

            $username = mysqli_real_escape_string($con, $username);

            $sql = "SELECT mode FROM Users WHERE username = '$username'";
            $run_query = mysqli_query($con,$sql);
            $result = mysqli_fetch_array($run_query);

            return $result['mode'];
            
        }


    }

?>