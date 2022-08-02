<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subfinalwebsite</title>
   <frameset rows="155,*" frameborder="yes" border="0" bordercolor="cyan">
        
        <frame src="HEADING.html" name="HEADING">
        <frameset cols="200,*">
        	<frame src="icons.html" name="icons">
        <frame src="Home.html" name="Home">
    </frameset>      
        </frameset>
    </head>
    </head>
       <body>
         <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
       </body>
 
</html>