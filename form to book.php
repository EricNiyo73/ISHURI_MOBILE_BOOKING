<?php
$con = mysqli_connect("localhost", "root", "", "ISHURIMOBILE");
if(isset($_POST['submit']))
{
  
  ;
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
    
     $pelevel = $_REQUEST['Previous_Education_level'];
    $peschool = $_REQUEST["Previous_Education_School"];
     $appschool = $_REQUEST["Applied_School"];
       $reason = $_REQUEST["Reason"];
       $querry = "INSERT INTO STUDENT_APP_FORM (Firstname,Lastname,Date_of_birth,Gender,Marital_Status,Disability,Email,Phone,Country_of_residence,Father_names,Mother_names,Cell,Sector,District,Previous_Education_level,Previous_Education_School,Applied_School,Reason) VALUES('$fname','$lname',$dob ,'$gender','$status' ,'$disability','$email' ,$phone, '$residence', '$fnames', '$mnames','$cell','$sector','$district','$pelevel','$peschool','$appschool' ,'$reason')";
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
<body><div class="menu_bar_tr">
<table border="0">


    <tr><td><h2>Fill this form to Apply for  Your Study</h2></td></tr>
    <tr><td>
        <form action="form to book.php" method="POST" target="homenesa" name="myform"  onsubmit=return validate_form(this)">
            Firstname:<input type="text" name="Firstname" required><span style="color:red;">*</span><br>
            Lastname:<input type="text" name="Lastname" required><span style="color:red;">*</span><br>
            Date of Birth:<input type="date" name="Date_of_birth" required><span style="color:red;">*</span><br>
            Gender:Male <input type="radio" name="Gender" value="Male"> Female<input type="radio" name="Gender" value="Female"><span style="color:red;">*</span><br>
            Marital Status:<select name="Marital_Status">
                <option selected hidden>--Please Select--</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
            </select><span style="color:red;">*</span><br>
            Disability:<input type="text" name="Disability"><span style="color:red;">*</span><br>
            Email address :<input type="text" name="Email" id="email" required><span style="color:red;">*</span><br>
            Phone number:<input type="tel" name="Phone"required><span style="color:red;">*</span><br>
            Country OF Residence:<input type="text" name="Country_of_residence" required><span style="color:red;">*</span><br>
            Father names:<input type="text" name="Father_names" required><span style="color:red;">*</span><br>
            Mother names:<input type="text" name="Mother_names" required><span style="color:red;">*</span><br>
            <strong>Your Address</strong><span style="color:red;">*</span><br>
            cell:<input type="text" name="Cell" size="20" placeholder="ex:RANGO"><span style="color:red;">*</span><br>
            Sector:<input type="text" name="Sector" size="20" placeholder="ex:TUMBA"><span style="color:red;">*</span><br>
            District:<input type="text" name="District" size="20"placeholder="ex:HUYE"><span style="color:red;">*</span><br>
            Previous Education level:<select name="Previous_Education_level">
                <option selected hidden>--select--</option>
                <option value="P1">P1</option>
                <option value="P2">P2</option>
                <option value="P3">P3</option>
                <option value="P4">P4</option>
                <option value="P5">P5</option>
                <option value="P6">P6</option>
                <option value="S1">S1</option>
                <option value="22">S2</option>
                <option value="S3">S3</option>
                <option value="S4">S4</option>
                <option value="S5">S5</option>
                <option value="S6">S6</option>
            </select><span style="color:red;">*</span><br>
            Previous Education School:<select name="Previous_Education_School">
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
            </select><span style="color:red;">*</span><br>
            Applied School(where you want to study):<select name="Applied_School">
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
            </select><span style="color:red;">*</span><br>
            <textarea name="Reason" placeholder="Introduce Your Reason" required></textarea><br>
            <input type="submit" name="submit" value="submit">&nbsp;<input type="reset" name="clear" value="Clear Form"><br>

        </form>
    </td></tr>
</table>

</div>
</body>
</html>