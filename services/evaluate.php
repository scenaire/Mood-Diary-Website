<?php

    session_start();
    include "../pages/allRequire.php";

    $_SESSION['LAST_ACTIVITY'] = time();

    /*****************************************starts on 2Q */ 

    if (isset($_POST['twoQsubmit'])) {

        $twoQ = 0;

        $twoQ += $_POST['input2Q_1'];
        $twoQ += $_POST['input2Q_2'];

        $date = gmdate('Y-m-d H:i:s');
        $score_arr = [$_POST['input2Q_1'],$_POST['input2Q_2']];

        $eva = new evaluateDB;
        if ($eva->createFirstRow($_SESSION['username']) == true) {
            $table = $eva->getLastRow($_SESSION['username']);
            if ($eva->insert2Q($table, $score_arr)) {

            }
        }

        if ($twoQ > 0) {
            header("location:../pages/evaluateResult.php?result=2q&2Q=".$twoQ);
        } else {
            
            if ($eva->addtoDB($_SESSION['username'],0,0,0,$date,$table) == true) {
                header("location:../pages/evaluateResult.php?result=2q&2Q=".$twoQ);
            } else {
                header("location:../pages/evaluateResult.php?result=2q&2Q=".$twoQ);
            }
        }

    }

    /*****************************************9Q here */ 

    if (isset($_POST['nineQsubmit'])) {

        $nineQ = 0;

        $nineQ += $_POST['input9Q_1'];
        $nineQ += $_POST['input9Q_2'];
        $nineQ += $_POST['input9Q_3'];
        $nineQ += $_POST['input9Q_4'];
        $nineQ += $_POST['input9Q_5'];
        $nineQ += $_POST['input9Q_6'];
        $nineQ += $_POST['input9Q_7'];
        $nineQ += $_POST['input9Q_8'];
        $nineQ += $_POST['input9Q_9'];


        $score_arr = [$_POST['input9Q_1'],$_POST['input9Q_2'],$_POST['input9Q_3'],$_POST['input9Q_4'],$_POST['input9Q_5'],$_POST['input9Q_6'],$_POST['input9Q_7'],$_POST['input9Q_8'],$_POST['input9Q_9']];
        $date = gmdate('Y-m-d H:i:s');
        
        $eva = new evaluateDB;
 
        if ($eva->createFirstRow($_SESSION['username']) == true) {
            $table = $eva->getLastRow($_SESSION['username']);
            if ($eva->insert9Q($table, $score_arr)) {

            }
        }
        



        if ($nineQ < 7) {
            $eva = new evaluateDB;
            if ($eva->addtoDB($_SESSION['username'],$_GET['2Q'],$nineQ,0,$date,$table) == true) {
                header("location:../pages/evaluateResult.php?result=9q&9Q=".$nineQ);
            } else {
                header("location:../pages/evaluateResult.php?result=9q&9Q=".$nineQ);
            }
        } else {
            header("location:../pages/evaluateResult.php?result=9q&2Q=".$_GET['2Q']."&9Q=".$nineQ);
        }
    }

    /*****************************************8Q here */ 

    if (isset($_POST['eightQsubmit'])) {

        $eightQ = 0;

        $eightQ += $_POST['input8Q_1']; 
        $eightQ += $_POST['input8Q_2']; 
        $eightQ += $_POST['input8Q_3']; 
        if (isset($_POST['input8Q_4'])) {
            $eightQ += $_POST['input8Q_4']; 
        }
        $eightQ += $_POST['input8Q_5']; 
        $eightQ += $_POST['input8Q_6']; 
        $eightQ += $_POST['input8Q_7']; 
        $eightQ += $_POST['input8Q_8']; 
        $eightQ += $_POST['input8Q_9']; 

        $score_arr = [$_POST['input8Q_1'],$_POST['input8Q_2'],$_POST['input8Q_3'],$_POST['input8Q_4'],$_POST['input8Q_5'],$_POST['input8Q_6'],$_POST['input8Q_7'],$_POST['input8Q_8'],$_POST['input8Q_9']];

        $eva = new evaluateDB;

        $date = gmdate('Y-m-d H:i:s');;
        $table = $eva->getLastRow($_SESSION['username']);
        if ($eva->insert8Q($table, $score_arr)) {

        }

        if ($eva->addtoDB($_SESSION['username'],$_GET['2Q'],$_GET['9Q'],$eightQ,$date,$table) == true) {
            header("location:../pages/evaluateResult.php?result=8q&2Q=".$_GET['2Q']."&9Q=".$_GET['9Q']."&8Q=".$eightQ);
        } else {
            header("location:../pages/evaluateResult.php?result=8q&2Q=".$_GET['2Q']."&9Q=".$_GET['9Q']."&8Q=".$eightQ);
        }
    }

    /*****************************************DASS21 here */

    if (isset($_POST['dassQsubmit'])) {

        $stress_score = 0;
        $anxiety_score = 0;
        $depress_score = 0;

        $depress_score += $_POST['inputDepress_1']; //
        $depress_score += $_POST['inputDepress_2']; //
        $depress_score += $_POST['inputDepress_3']; //
        $depress_score += $_POST['inputDepress_4']; //
        $depress_score += $_POST['inputDepress_5']; //
        $depress_score += $_POST['inputDepress_6']; //
        $depress_score += $_POST['inputDepress_7']; //

        $anxiety_score += $_POST['inputAnxiety_1']; //
        $anxiety_score += $_POST['inputAnxiety_2']; //
        $anxiety_score += $_POST['inputAnxiety_3']; //
        $anxiety_score += $_POST['inputAnxiety_4']; //
        $anxiety_score += $_POST['inputAnxiety_5']; //
        $anxiety_score += $_POST['inputAnxiety_6']; //
        $anxiety_score += $_POST['inputAnxiety_7']; //

        $stress_score += $_POST['inputStress_1']; //
        $stress_score += $_POST['inputStress_2']; //
        $stress_score += $_POST['inputStress_3']; //
        $stress_score += $_POST['inputStress_4']; //
        $stress_score += $_POST['inputStress_5']; //
        $stress_score += $_POST['inputStress_6']; //
        $stress_score += $_POST['inputStress_7']; //

        $score_arr = [$_POST['inputStress_1'],$_POST['inputAnxiety_1'],$_POST['inputDepress_1'],$_POST['inputAnxiety_2'],$_POST['inputDepress_2'],
                        $_POST['inputStress_2'], $_POST['inputAnxiety_3'],$_POST['inputStress_3'], $_POST['inputAnxiety_4'], $_POST['inputDepress_3'],
                        $_POST['inputStress_4'], $_POST['inputStress_5'], $_POST['inputDepress_4'], $_POST['inputStress_6'], $_POST['inputAnxiety_5'],
                        $_POST['inputDepress_5'], $_POST['inputDepress_6'], $_POST['inputStress_7'], $_POST['inputAnxiety_6'], $_POST['inputAnxiety_7'],
                        $_POST['inputDepress_7']];

        $date = gmdate('Y-m-d H:i:s');
        $eva = new evaluateDB;

        if ($eva->createFirstRowDass($_SESSION['username']) == true) {
            $table = $eva->getLastRowDass($_SESSION['username']);
            if ($eva->insertDass($table, $score_arr)) {

            }
        }


        if ($eva->addToDass($_SESSION['username'],$depress_score,$anxiety_score,$stress_score, $date, $table) == true) {
            header("location:../pages/dassResult.php?depress=".$depress_score."&anxiety=".$anxiety_score."&stress=".$stress_score);
        } else {
            header("location:../pages/dassResult.php?depress=".$depress_score."&anxiety=".$anxiety_score."&stress=".$stress_score);
        }
    }

?>