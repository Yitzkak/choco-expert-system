<?php
    $report = '';

    require '../conn.php';
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['cpass'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
       	if( $pass == $cpass ){
			$sql1 = "SELECT * FROM users WHERE username = ?";
			$stmt1 = $pdo->prepare($sql1);
			$stmt1->execute([$uname]);
			$user1 = $stmt1->fetchAll();

			if($user1 == true){
				$report = 'Username already exist please choose another one.';
			}
			else {
				//insert user data into database
				$sql = "INSERT INTO users (firstname, lastname, username, pword) "
				. "VALUES ('$fname', '$lname', '$uname', '$pass')";

				if ($pdo->query($sql) == true){
					$report = 'Registered Successfully';
				}
				else{
					$report = 'Registration Failed';
				}
			}
        }
        else{
         $report = 'Password do not match !';
        }
    }

?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Registration Form</h1>
    <form class="form" action="register.php" method="post" >
      <div class="alert alert-error"><?php echo $report; ?></div>
      <input type="text" placeholder="Firstname" name="fname" required />
      <input type="text" placeholder="Lastname " name="lname" required />
      <input type="text" placeholder="User Name" name="uname" required />
      <input type="password" placeholder="Password" name="pass"  required />
      <input type="password" placeholder="Confirm Password" name="cpass"  required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      
    </form>
    <div class="alreadyRegistered">Already have an account?<a href="../login/login.php"> Login</a></div>
  </div>
</div>