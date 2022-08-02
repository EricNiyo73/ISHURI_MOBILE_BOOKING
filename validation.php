<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ISHURIMOBILE");
if(isset($_POST['submit']))
{
 
 if(isset($username) || isset($password))
 {
 	 $names= $_REQUEST["Username"];
 
     $password= $_REQUEST['Password'];
    
            $s = "SELECT * FROM STUDENT_PARE_TEACH where Username = '$names' AND Password='$password'";
            $result = mysql_query($con,$s);
            $num = mysql_query($result);
            if($num == 1)
            {
            	header('location:SubfinalStudent.php');
	            	}
	            	else
	            	{
	            		header('location:Login1.php');
	            	}
 }
            }

?>