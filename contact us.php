<?php
$con = mysqli_connect("localhost", "root", "", "ISHURIMOBILE");
if(isset($_POST['submit']))
{
    $email = $_REQUEST["Email"];
     $names = $_REQUEST["Names"];
      $message = $_REQUEST["Message"];
      $querry= "INSERT INTO CONTACT_US(Email,Names,message)VALUES('$email','$names','$Message')";
      $rs = mysqli_query($con, $querry);
            // Check if the connection is established
            if($rs){
                echo "<p style='color:darkblue;'>$names  THANK YOU<br/></p>";
            } else
            {
                echo "<p style='color:red;'>wrong ".mysqli_error($con)."</p>";
            }
}
    ?>
<!DOCTYPE html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="cssstyle.css">
<link rel="stylesheet" href="footerhome.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
 <script type="text/javascript" src="form_validation.js"></script>
</head>
    <body>
        <div class="menu_bar_tr">
        <table border="0">

       
         <tr><td> 
                <p>info@mineduc.gov.rw</p>
            </td></tr>
            <tr><td>
  
    <form action="contact us.php" method="post" role="form" onsubmit="return validate_form(this)">
        <input type="email" name="Email" id="email" placeholder="Your Email "required><span style="color:red;">*</span>
        <input type="text" name="Names" placeholder="Your Names" required><span style="color:red;">*</span>
        
        <textarea placeholder="Message" name="Message"></textarea><span style="color:red;">*</span><br>
        <input type="submit" value="Send message" name="submit">
    </form>
</td></tr></div>
<tr><td colspan="3">
  <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="https://www.instagram.com"><i class="icon ion-social-instagram"></i></a><a href="https://www.snapchat.com"><i
                        class="icon ion-social-snapchat"></i></a><a href="https://www.twitter.com"><i
                        class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com"><i class="icon ion-social-facebook"></i></a>
    
            </div>
            <p class="copyright" style="text-align: right;">copyright @ 2022</p>
            <p style="text-align: right;" class="copyright">Designed By Eric N</p>
        </footer>
    </div>

</td></tr>

        </table></div>
    </body>
</html>