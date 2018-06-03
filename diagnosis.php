<?php
    require 'conn.php';
    session_start();

    $age = "";
    $weigth = "";
    $obese = "";
    $history = "";
    $_SESSION["testCount"] = 0;
    $testCounter = $_SESSION["testCount"];

    if(isset($_POST["age"]) || isset($_POST["weigth"]) || isset($_POST["obese"]) || isset($_POST["history"])){
        
        if(!empty($_POST["obese"])){
            $yesORno = $_POST["obese"];
            if ($yesORno == 'yes') {
                $obese = 1;
                echo "yes obe";
            }
            else{
                $obese = 0;
                echo "no obe";
            }
        }

        $age = $_POST["age"];
        $weigth = $_POST["weigth"];
        //$obese = $_POST["obese"];
        $history = $_POST["history"];
        $username = $_SESSION["uname"]; 

        
        $sql = "INSERT INTO tbl_test1 (username, age, weigth, obese , history) "
				. "VALUES ('$username','$age', '$weigth', '$obese', '$history')";

        if($pdo->query($sql) == true){
            $result = 'Submitted Successfully';
            $testCounter++;
        }
        else {
            print_r($pdo->errorInfo());
            echo "something went wrong";
        }

        //echo "here is the ans ".$yerORno;
    }

    if(isset($_POST["c1"]) || isset($_POST["c2"]) && isset($_POST["c3"]) && isset($_POST["c4"])){
        $age = $_POST["c1"];
        $weigth = $_POST["c2"];
        $height = $_POST["c3"];
        $yerORno = $_POST["c4"];
        $username = $_SESSION["uname"]; 

        $sql = "INSERT INTO users (username, age, height,weigth , history) "
				. "VALUES ('$username','$age', '$weigth', '$height', '$yesORno')";

        if($pdo->query($sql) == true){
            $result = 'Submitted Successfully';
        }

        //echo "here is the ans ".$yerORno;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script type = "text/javascript" src="js/jquery-3.3.1.js"></script>
</head>
<body>
    <?php include('header.php');?>
    <div class="content-1">
        <div class="content-2">
            <div class="tab">
            <button class="tablinks" onclick="openStage(event, 'stage-1')" id ="defaultOpen">Stage One</button>
            <button class="tablinks" onclick="openStage(event, 'stage-2')">Stage Two</button>
            </div>

            <!-- Tab content -->
            <div id="stage-1" class="tabcontent">
                <form action="diagnosis.php" method="post">
                    <p>Enter your age:
                        <p><input type="text" name="age" id="age" class="diag"></p>
                    </p>
                    <p>Enter your weigth:
                        <p><input type="text" name="weigth" id="weight" class="diag"></p>
                    </p>
                    
                    <p>Do you have family history of prostate cancer?
                        <p>                
                            <label>No
                                <input type="radio" name="history" id="no" value="no" class="diag">
                            </label>
                            <label>Yes
                                <input type="radio" name="history" id="yes" value="yes" class="diag">
                            </label>
                        </p>
                    </p>
                    <p>Are you obese?
                        <p>                
                            <label>No
                                <input type="radio" name="obese" id="no" value="no" class="diag">
                            </label>
                            <label>Yes
                                <input type="radio" name="obese" id="yes" value="yes" class="diag">
                            </label>
                        </p>
                    </p>
                    <p>
                        <input type="button" value="next >>" onclick="openStage(event, 'stage-2')" id = "stage1-btn" class="btn btn-primary">
                    </p>
                </form>
            </div>

            <div id="stage-2" class="tabcontent">
            <form action="diagnosis.php" method="post">
               <p>Do  you urinate often?</p>
                <div class="form-check form-check-inline" >                    
                    <input class="form-check-input" type="radio" name="c1" id="inlineRadio1" value="no" class="stage-2-cb">
                    <label for="inlineRadio1" class="form-check-label">No</label>
                </div>
                <div class="form-check form-check-inline" >                    
                    <input class="form-check-input" type="radio" name="c1" id="inlineRadio2" value="yes" class="stage-2-cb">
                    <label for="inlineRadio2" class="form-check-label">Yes</label>
                </div>
                <p><hr></p>

                <p>Do you have pain during urination?</p>
                <div class="form-check form-check-inline" >                    
                    <input class="form-check-input" type="radio" name="c2" id="inlineRadio3" value="no" class="stage-2-cb">
                    <label for="defaultCheck1" class="form-check-label">No</label>
                </div>
                <div class="form-check form-check-inline" >                    
                    <input class="form-check-input" type="radio" name="c2" id="inlineRadio4" value="yes" class="stage-2-cb">
                    <label for="defaultCheck1" class="form-check-label">Yes</label>
                </div>
                <p><hr></p>

                <p>Do you leak or dribble urine after you have urinate?</p>
                    
                <div class="form-check form-check-inline" >                    
                    <input class="form-check-input" type="radio" name="c3" id="inlineRadio5" value="no" class="stage-2-cb">
                    <label for="defaultCheck1" class="form-check-label">No</label>
                </div>
                <div class="form-check form-check-inline" >                    
                    <input class="form-check-input" type="radio" name="c3" id="inlineRadio6" value="yes" class="stage-2-cb">
                    <label for="defaultCheck1" class="form-check-label">Yes</label>
                </div>
                <p><hr></p>

                <p>Do you have an ache under your scrotum?</p>
                    
                    <div class="form-check form-check-inline" >                    
                        <input class="form-check-input" type="radio" name="c4" id="inlineRadio7" value="no" class="stage-2-cb">
                        <label for="defaultCheck1" class="form-check-label">No</label>
                    </div>
                    <div class="form-check form-check-inline" >                    
                        <input class="form-check-input" type="radio" name="c4" id="inlineRadio8" value="yes" class="stage-2-cb">
                        <label for="defaultCheck1" class="form-check-label">Yes</label>
                    </div>
                    <p><hr></p>

                <p>Do you have problems starting the urine stream, or do you wake many times at night to urinate?</p>
                    
                    <div class="form-check form-check-inline" >                    
                        <input class="form-check-input" type="radio" name="c5" id="inlineRadio9" value="no" class="stage-2-cb">
                        <label for="defaultCheck1" class="form-check-label">No</label>
                    </div>
                    <div class="form-check form-check-inline" >                    
                        <input class="form-check-input" type="radio" name="c5" id="inlineRadio10" value="yes" class="stage-2-cb">
                        <label for="defaultCheck1" class="form-check-label">Yes</label>
                    </div>
                    <p><hr></p>

                    <p><input type="button" value="submit" class="btn btn-primary" id="stage-2-btn"></p>          
            </div> 
            </form>  
        </div>

        <div><?php $result; ?></div>
    </div>

    <!--<div class="modal">-->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="loader" id="myLoader">

            </div>

            <div class="result">
                <button class="accordion aktive">
                    Result
                </button>
                <div class="panel" style="display:block">
                    <p class="result-space">
                        
                    </p>
                </div>

                <button class="accordion">
                    Reason
                </button>
                <div class="panel">
                    <p class="reason-space">

                    </p>
                </div>

                <button class="accordion">
                    Percentage of Likelihood
                </button>
                <div class="panel">
                    <p class="percentage-space">
                        <div class="progress ">
                            <div class="progress-bar bg-success progress-bar-striped" style="width:70%">

                            </div>
                        </div>
                    </p>
                </div>

                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="js/util.js"></script>
</body>
</html>