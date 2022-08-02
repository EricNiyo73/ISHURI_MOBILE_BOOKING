<?php
$con = mysqli_connect("localhost", "root", "", "ISHURIMOBILE");
if(isset($_POST['submit']))
{
   
  $fname = $_REQUEST["Firstname"];
  $lname = $_REQUEST["Lastname"];
   $dob = $_REQUEST["Date_of_birth"];
  $gender = $_REQUEST["Gender"];
   $status = $_REQUEST["Marital_Status"];
   $disability = $_REQUEST["Disability"];
    $email = $_REQUEST["Email"];
     $phone = $_REQUEST["Phone"];
      $residence = $_REQUEST["Country_of_residence"];
       $fnames = $_REQUEST["Father_names"];
        $mnames = $_REQUEST["Mother_names"];
    $cell = $_REQUEST["Cell"];
    $sector = $_REQUEST["Sector"];
    $district = $_REQUEST["District"];
    
     $elevel = $_REQUEST['Education_level'];
    $pwschool = $_REQUEST["Previous_Working_School"];
     $appschool = $_REQUEST["Applied_School"];
      
       $querry = "INSERT INTO TEACHER_APP_FORM (Firstname,Lastname,Date_of_birth,Gender,Marital_Status,Disability,Email,Phone,Country_of_residence,Father_names,Mother_names,Cell,Sector,District,Education_level,Previous_Working_School,Applied_School) VALUES('$fname','$lname',$dob,'$gender','$status' ,'$disability','$email',$phone, '$residence', '$fnames', '$mnames','$cell','$sector','$district','$elevel','$pwschool','$appschool')";
        $rs = mysqli_query($con, $querry);
            // Check if the connection is established
            if($rs){
                echo "<p style='color:darkblue;'>$fname  Succesfully submitted<br/></p>";
            } else
            {
                echo "<p style='color:red;'>wrong ".mysqli_error($con)."</p>";
            }
}
     
     ?>

<!DOCTYPE html>
<head><title>form to Book</title>
<link rel="stylesheet" type="text/css" href="cssstyle.css">
<script type="text/javascript" src="form_validation.js"></script>
</head>
<body><div class="menu_bar_form">
<table border="0">


    <tr><td><h2>Fill this form to apply for job</h2></td></tr>
    <tr><td>
        <form action="" method="post" name="myform" id="create-account-form" onsubmit=return validate_form(this)">
           Firstname:<input type="text" name="Firstname" required><br>
            Lastname:<input type="text" name="Lastname" required><br>
            Date of Birth:<input type="date" name="Date_of_birth" required><br>
            Gender:Male <input type="radio" name="Gender" value="Male"> Female<input type="radio" name="Gender" value="Female"><br>
            Marital Status:<select name="Marital_Status">
                <option selected hidden>--Please Select--</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="DIVORCE">divorce</option>
            </select><br>
             Disability:<input type="text" name="Disability"><br>
            Email address :<input type="text" id="email" name="Email"required><br>
            Phone number:<input type="tel" name="Phone"required><br>
            Country OF Residence:<input type="text" name="Country_of_residence" required><br>
            Father names:<input type="text" name="Father_names" required><br>
            Mother names:<input type="text" name="Mother_names" required><br>
            <strong>Your Address</strong><br>
            cell:<input type="text" name="Cell" size="20" placeholder="ex:RANGO"><br>
            Sector:<input type="text" name="Sector" size="20" placeholder="ex:TUMBA"><br>
            District:<input type="text" name="District" size="20"placeholder="ex:HUYE"><br>
            Education level:<select name="Education_level">
                <option selected hidden>--select--</option>
                <option value="A2">A2</option>
                <option value="A1">A1</option>
                <option value="A0">A0</option>
                <option value="MASTERS">MASTERS</option>
                <option value="PHD">PHD</option>
                
            </select><br>
            Previous Working School:<select name="Previous_Working_School">
                <option selected hidden>--select school--</option>
                <option value="1">NYAMATA HIGH SCHOOL</option>
                <option value="2">ECOLE TECHNIQUE SAINT PETER IGIHOZO</option>
                <option value="3">ESPANYA</option>
                <option value="4">MARANATHA</option>
                <option value="5">C.F.P.A. St JEAN BOSCO</option>
                <option value="6">GROUPE SCOLAIRE ST ALOYS</option>
                <option value="7">KIGALI CHRISTIAN SCHOOL</option>
                <option value="8">KIND DAVID ACADEMY</option>
                <option value="9">COLLEGE DE L'ESPOIR DE GASOGI</option>
                <option value="10">COLLEGE DOCTRINA VITAE</option>
                <option value="12">COLLEGE SAINT JEAN NYARUSANGE</option>
                <option value="14">GAHOGO ADVENTIST ACADEMY</option>
                <option value="15">Ecole Technique De Kabgayi : ETEKA</option>
                <option value="16">EFOTEC KANOMBE</option>
                <option value="17">GROUPE SCOLAIRE APRED NDERA</option>
            </select><br>
            Applied School(where you want to teach):<select required name="Applied_School">
                <option selected hidden>--select school--</option>
                <option value="1">NYAMATA HIGH SCHOOL</option>
                <option value="2">ECOLE TECHNIQUE SAINT PETER IGIHOZO</option>
                <option value="3">ESPANYA</option>
                <option value="4">MARANATHA</option>
                <option value="5">C.F.P.A. St JEAN BOSCO</option>
                <option value="6">GROUPE SCOLAIRE ST ALOYS</option>
                <option value="7">KIGALI CHRISTIAN SCHOOL</option>
                <option value="8">KIND DAVID ACADEMY</option>
                <option value="9">COLLEGE DE L'ESPOIR DE GASOGI</option>
                <option value="10">COLLEGE DOCTRINA VITAE</option>
                <option value="12">COLLEGE SAINT JEAN NYARUSANGE</option>
                <option value="14">GAHOGO ADVENTIST ACADEMY</option>
                <option value="15">Ecole Technique De Kabgayi : ETEKA</option>
                <option value="16">EFOTEC KANOMBE</option>
                <option value="17">GROUPE SCOLAIRE APRED NDERA</option>
            </select><br>
            
            <input type="submit" name="submit" value="Submit">&nbsp;<input type="reset" name="clear" value="Clear Form"><br>

        </form>
    </td></tr>
</table>
</div>
</body>
</html>