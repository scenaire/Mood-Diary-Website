<?php

session_start();
include "../pages/allRequire.php";

/*****************************************Login For Admin*/ 

if (isset($_POST['login'])) {
    $userdb = new users;

    $user = $_POST['loginUsername'];
    $pass = $_POST['loginPassword'];

    $user = strtolower($user);

    $check = $userdb->check_login($user,$pass);

    if($check) {
        $_SESSION['username'] = $user;
        $_SESSION['role'] = $userdb->check_role($user);
        $_SESSION['LAST_ACTIVITY'] = time();
        header("location:../index.php");
    } else {
        header("location:../pages/login.php?loginresult=wrong");
    }
}

/*****************************************Login For Patient*/ 

if (isset($_POST['loginPatient'])) {


    $userdb = new users;
    $user = $_POST['loginUsername'];
    $user = strtolower($user);

    //เช็คเลขประประชาชน
    if (strlen($user) != 13) {
        header("location:../pages/loginPatient.php?loginresult=wrong");
    }

    $rev = strrev($user);
    $total = 0;
    for($i=1;$i<13;$i++)
    {
        $mul = $i +1;
        $count = $rev[$i]*$mul; 
        $total = $total + $count; 
    }
    $mod = $total % 11;
    $sub = 11 - $mod; 
    $check_digit = $sub % 10; 
    if($rev[0] == $check_digit)  {
        $check = $userdb->check_login_for_patient($user);

        if ($check) {
            $_SESSION['username'] = $user;
            $_SESSION['role'] = $userdb->check_role($user);
            $_SESSION['LAST_ACTIVITY'] = time();
            header("location:../index.php");
        } else {
            $c = $userdb->register_patient($user,"123456");
            if ($c) {
                $_SESSION['username'] = $user;
                $_SESSION['role'] = $userdb->check_role($user);
                $_SESSION['LAST_ACTIVITY'] = time();
                header("location:../index.php");
            } else {
                header("location:../pages/loginPatient.php?loginresult=cantregis");
            }
        }
    }
    else {
        header("location:../pages/loginPatient.php?loginresult=wrong");
    }
}


/*****************************************Register */ 

if (isset($_POST['register'])) {
    $user = $_POST['registerUsername'];
    $pass = $_POST['registerPassword'];
    $confirm_pass = $_POST['confirmPassword'];

    $user = strtolower($user);

    if (strcmp($pass,$confirm_pass) == 0) {

        $userdb = new users;
        $check = $userdb->register_patient($user,$pass);

        if($check) {
            $_SESSION['username'] = $user;
            $_SESSION['role'] = $userdb->check_role($user);
            $_SESSION['LAST_ACTIVITY'] = time();
            header("location:../index.php");
        } else {
            header("location:../pages/register.php?registerresult=wrong");
        }

    } else {
        header("location:../pages/register.php?registerresult=passwordnotmatch");
    }
}

/*****************************************log out */ 

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("location:../index.php");
}


?>