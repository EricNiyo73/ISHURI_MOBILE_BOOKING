
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NESA DASHBOARD</title>
   <frameset rows="140,*" frameborder="yes" border="0" bordercolor="cyan">
        
        <frame src="NESAHEADER.html" name="NESAHEADER" scrolling="no">
        <frameset cols="250,*">
             <frame src="nesalinks.html" name="nesalinks">
             <frame src="homenesa.html" name="homenesa">
        </frameset>
        
            
        </frameset>

    </head>
       <body>
         <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
       </body></html>
 