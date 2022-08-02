<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "ISHURIMOBILE");
if(isset($_POST['submit']))
{
  $username = $_REQUEST["category"]; 
  $names = $_REQUEST["Username"];
  $fname = $_REQUEST["Firstname"];
  $lname = $_REQUEST["Lastname"];
  $email = $_REQUEST["Email"];
    $phone = $_REQUEST["Phone"];
     $password = $_REQUEST['Password'];
    
            $s = "SELECT * FROM STUDENT_PARE_TEACH where Username = '$names'";
            $result = mysql_query($con,$s);
            $num = mysqli_num_rows($result);
            if($num == 1)
            {
                echo "username taken"; 
            }
            else
            {
                  $querry= "INSERT INTO STUDENT(Username,Firstname,Lastname,Email,Phone,Password,category)VALUES('$names','$fname','$lname','$email','$phone',$password,'$username')";
    mysqli_query($con, $querry);
    echo "registration successfully";

            }
}
?>

<!DOCTYPE html>
<head><title></title> <link rel="stylesheet" href="cssstyle.css">
</head>
    <body>
        <script type="text/javascript" src="JAVASCRIPT.js"></script>
        <section class="menu_bar_tr">
            <p>Create account Here</p>

     <form action="mainsignup.php" method="POST">
         <select name="category">
             <option selected>--select--</option>
             <option value="Learner">learner</option>
             <option value="Parent">Parent</option>
             <option value="Teacher">Teacher</option>
             
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