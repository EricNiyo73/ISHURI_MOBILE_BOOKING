<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['Username']);
   $email = mysqli_real_escape_string($conn, $_POST['Email']);
   $fname = mysqli_real_escape_string($conn, $_POST['Firstname']);
   $sname = mysqli_real_escape_string($conn, $_POST['Lastname']);
   $pass = md5($_POST['Password']);
   
    $phone = $_POST['Phone'];
   $usertype = $_POST['User_type'];

   $select = " SELECT * FROM STUDENT_PARE_TEACH WHERE Email = '$email' && Password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

         $querry= "INSERT INTO STUDENT_PARE_TEACH (Username,Firstname,Lastname,Email,Phone,Password,User_type)VALUES('$name','$fname','$sname','$email',$phone,'$pass','$usertype')";
         mysqli_query($conn, $querry);
         header('location:LOGINPAGE.php');
      }
   
};
// ?>

<!DOCTYPE html>
<head><title></title> <link rel="stylesheet" href="cssstyle.css">
</head>
    <body>
        <script type="text/javascript" src="JAVASCRIPT.js"></script>
        <section class="menu_bar_tr">
            <p>Create account Here</p>

     <form action="SIGNUP.php" method="POST">
        <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
         <select name="User_type">
             <option selected>--select--</option>
             <option value="Learner">learner</option>
             <option value="Parent">Parent</option>
             <option value="Teacher">Teacher</option>
               <option value="Teacher">NESA</option>
                 <option value="Teacher">admin</option>
             
         </select>
          <br><br>
        Username :<input type="text" name="Username" required placeholder="ericniyokwizerwa1@gmail.com"><span style="color:red;">*</span><br><br>
        Firstname :<input type="text" name="Firstname" required><span style="color:red;">*</span><br><br>
        Lastname:<input type="text" name="Lastname"><br><br>
        Email:<input type="email" name="Email" placeholder="ericniyokwizerwa1@gmail.com" required><span style="color:red;">*</span><br><br>
        Phone number:<input type="tel" name="Phone" required><span style="color:red;">*</span><br><br>
        Password:<input type="password" name="Password" required="password"><span style="color:red;">*</span><br><br>
       
        <input type="submit" value="Create" name="submit">
     </form>
    </section>
    </body>

</html>