<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEACHER DASHBOARD</title>
   <frameset rows="155,*" frameborder="yes" border="0" bordercolor="cyan">
        
        <frame src="Teacherheading.html" name="Teacherheading">
        
        <frame src="teacherhome.html" name="teacherhome">
      
            
        </frameset>

    </head>
       <body>
       	<h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
       </body>
 
</html>