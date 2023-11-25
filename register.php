<?php
include('connect.php');
include('connect2.php');

if(isset($_POST['submit']))
{
$fullname=$_POST['fullname'];
$matric_no=$_POST['matric_no'];
$session=$_POST['session'];
$faculty=$_POST['faculty'];
$dept=$_POST['dept'];
$phone=$_POST['phone'];
$password=($_POST['password']);
$query=mysqli_query($conn,"insert into students(fullname,matric_no,session,faculty,dept,phone,password) values('$fullname','$matric_no','$session','$faculty','$dept','$phone','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered for Clearance. You can login now');</script>";
	header('location:login.php');
}
}
?>



<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>login Form| online Clearance system</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 <link rel="icon" type="image/png" sizes="16x16" href="images/logo2.png">
 <style type="text/css">
<!--
.style3 {
	color: #FF0000;
	font-weight: bold;
	font-size: 24px;
}
.style4 {color: #FF0000}
-->

</style>
<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                
                <img src="images/logo1.png" alt="" width="200" height="100">
            </div>
            <p class="login-box-msg style2">REGISTER HERE TO INITIATE CLEARANCE</p>
            <form class="m-t" role="form" method= "POST" action="">
                <div class="form-group">
                    <input type="text" name="fullname" class="form-control" placeholder="Full Name" required="">
                </div>
                <div class="form-group">
                    <input type="text" name="matric_no" class="form-control" placeholder="Registration No" required="">
                </div>
                <div class="form-group">
                <?php
//Our select statement. This will retrieve the data that we want.
$sql = "SELECT * FROM tblsession";
//Prepare the select statement.
$stmt = $dbh->prepare($sql);
//Execute the statement.
$stmt->execute();
//Retrieve the rows using fetchAll.
$sessions = $stmt->fetchAll();
?>
                    <select name="session" id="select" class="form-control" required="">
                        <?php foreach($sessions as $row_session): ?>
                            <option value="<?= $row_session['session']; ?>"><?= $row_session['session']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                  <select name="faculty" id="select" class="form-control" required>
                  <option value="">Select faculty</option>
                  <option value="Science">Science</option>
                  <option value="Education">Education</option>
                  <option value="Business">Business</option>
                  </select>  
                </div>
                <div class="form-group">
                    <select name="dept" id="select" class="form-control">
                    <option value="Select Department">Select Department</option>
                    <option value="Mathematics">Mathematics</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Education">Education</option>
                    <option value="Business Administration">Business Administration</option>
                    <option value="Business Information Technology">Business Information Technology</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Phone No." required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password_again" id="password_again" class="form-control" placeholder="Password Again" required="">
                </div>

                <button type="submit" name="submit" class="btn btn-primary block full-width m-b" id="submit">Register</button>




                <a href="#"><small>Forgot password?</small></a>
			
				
                <p class="text-muted text-center">&nbsp;</p>

            
                <a href="login.php">Login</a>
          </form>
            <p class="m-t"></p>
			
        </div>
    </div>
	
<?Php include('footer.php');?>
    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Success</strong> 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      <strong>Error</strong> 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>
</body>

</html>
