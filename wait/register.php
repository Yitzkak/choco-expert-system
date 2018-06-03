<?php
  require_once('../conn.php');

    if(isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['cpass'])){
      if(!empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['cpass'])){
        $uname = $_POST['uname'];   
        $pass =  $_POST['pass'];
        $pass =  $_POST['cpass'];
      }
    }
    if(isset($_POST['age']) && isset($_POST['weight']) && isset($_POST['color'])){
      if(!empty($_POST['age']) && !empty($_POST['weight']) && !empty($_POST['color'])){
        $age = $_POST['age'];   
        $weigth =  $_POST['weight'];
        $color =  $_POST['color'];

        $sql = "insert into tbl_patient"
      }
    }
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['address'])){
      if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['phone']) && !empty($_POST['address'])){
        $fname = $_POST['fname'];   
        $lname =  $_POST['lname'];
        $phone =  $_POST['phone'];
        $address =  $_POST['address'];
      }
    }

  
  
  
  
  /*$firstname = $lastname = $uname = $pass = $cpass ='';
  $age = $weigth = $phone = $address = '';

  /*if(
         !empty($_POST['username'])  && !empty($_POST['pass'])
      && !empty($_POST['cpass'])     && !empty($_POST['age'])
      && !empty($_POST['weigth'])    && !empty($_POST['color'])
      && !empty($_POST['fname'])     &&!empty( $_POST['lname'])
      && !empty($_POST['address'])   && !empty($_POST['phone'])){
        echo "filled";
    

    }
    else{
      echo 'hertrree';
    }*/
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- multistep form -->
<form  method = "POST" action="register.php" id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Health Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="uname" placeholder="Username" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="submit" name="submit" class="next action-button" value="submit" />
    <input type="button" name="next" class="next action-button" value="next" />
    
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Health Profiles</h2>
    <h3 class="fs-subtitle">Personal Health Details</h3>
    <input type="text" name="age" placeholder="Age" />
    <input type="text" name="weigth" placeholder="Weigth" />
    <input type="text" name="color" placeholder="Color" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="next action-button" value="submit" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
