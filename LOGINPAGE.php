<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($conn, $_POST['Email']);
   $email = mysqli_real_escape_string($conn, $_POST['Email']);
   $pass = md5($_POST['password']);
    
  

   $select = " SELECT * FROM STUDENT_PARE_TEACH WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin')
      {

         $_SESSION['admin_name'] = $row['Username'];
         header('location:Adminpage.php');

      }elseif($row['User_type'] == 'Learner')
      {

         $_SESSION['user_name'] = $row['Username'];
         header('location:STUDENTDASHBBOARD.php');

      }elseif($row['User_type'] == 'Teacher')
      {
        $_SESSION['user_name'] = $row['Username'];
         header('location:teacherdashboard.php');

      }
      elseif($row['User_type'] == 'NESA')
      {
        $_SESSION['user_name'] = $row['Username'];
         header('location:NESADASHBOARD.php');

      }
      elseif($row['User_type'] == 'Parent')
      {

         $_SESSION['user_name'] = $row['Username'];
         header('location:STUDENTDASHBBOARD.php');

     
   }else{
      $error[] = 'incorrect email or password!';
   }}
};
?>

	 
	 <!DOCTYPE html>
<head><title></title><link rel="stylesheet" href="cssstyle.css">
    <script type="text/javascript" src="form_validation.js"></script>
</head>
    <body>
     <div class="menu_bar_form">
                <form action="" method="post" onsubmit="return validate_form(this)" >
                     <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
                    
               <p>Username:<input type="text" name="Email" id="email" placeholder=" Email" required></p><br>
              <p>Password:<input type="password" name="password"></p><br>

<p><button type="submit" name="submit">Login</button></p>
<p><a href="forgot.html"> forgot</a> your password?</p>
<p>Or</p><p><a href="SIGNUP.php" class="sign_up_link">Sign Up</a></p>

</form>
     </div>   
    </body>
</html>