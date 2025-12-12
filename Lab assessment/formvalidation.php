<!DOCTYPE HTML>
<html>
    <head>
        <style>
        .error {
            color: #FF0000;
        }
    </style>
    </head>
    <body>
    <?php
     $nameErr =$emailErr =$dayErr = $monthErr =$yearErr= $genderErr =$degreeErr = $bloodErr ="";
          $name =$email =$day = $month =$year = $gender =$degree = $blood ="";

     if($_SERVER["REQUEST_METHOD"]== "POST"){
        if(empty($_POST["name"])){
            $nameErr = "name is required";
        }
        else{
            $name = test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
            {
                $nameErr = "Only letters and white space allowed";
            }
            elseif(str_word_count($name) <2){
                                $nameErr = "must Contain at least two words";

            }
        }
         if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
         
        }
        if(empty($_POST["dd"])){
            $dayErr = "day is required";
        }
        else{
            $day = test_input($_POST["dd"]);
            if(!is_numeric($day) || ($day <1 || $day >31) )
            {
                $dayErr = "only number and 1-31 allowed";
            }
            
        }
        if(empty($_POST["mm"])){
            $monthErr = "month is required";
        }
        else{
            $month = test_input($_POST["mm"]);
            if(!is_numeric($month) || ($month <1 || $month >12) )
            {
                $monthErr = "only number and 1-12 allowed";
            }
            
        }
        if(empty($_POST["yyyy"])){
            $yearErr = "year is required";
        }
        else{
            $year = test_input($_POST["yyyy"]);
            if(!is_numeric($year) || ($year <1953 || $year >1998) )
            {
                $yearErr = "only number and  1953-1998 allowed";
            }
            
        }
         if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
        } else {
          $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["degree"])) {
          $degreeErr = "Degree is required";
        } 
        else {
          $degree = $_POST["degree"];
          if(count($degree )<2){
             $degreeErr = "must Contain at least two ";


          }
           
        }
         if (empty($_POST["blood"])) {
          $bloodErr = "blood group is required";
        } 
        else {
          $blood = test_input($_POST["blood"]);
           
        }

     }
     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
     ?>

     <form method ="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset >
            <legend><h2>NAME</h2></legend>
      <input type="text" name="name">
        <span class="error">*
            <?php echo $nameErr;?>
        </span>
        <hr>              <input type="submit" name="submit" value="Submit">

       </fieldset>
     

      <fieldset >
            <legend><h2>EMAIL</h2></legend>
      <input type="text" name="email">
        <span class="error">*
            <?php echo $emailErr;?>
        </span>
        <hr>
                  <input type="submit" name="submit" value="Submit">

      </fieldset>
      
      <fieldset >
            <legend><h2>DATE OF BIRTH</h2></legend>
          dd<input type="text" name="dd">
        <span class="error">*
            <?php echo $dayErr;?>
        </span>
        /
         mm<input type="text" name="mm">
        <span class="error">*
            <?php echo $monthErr;?>
        </span>
        /
        yyyy<input type="text" name="yyyy">
        <span class="error">*
            <?php echo $yearErr;?>
        </span>
        
        <hr>
                  <input type="submit" name="submit" value="Submit">

      </fieldset>


      <fieldset >
            <legend><h2>GENDER</h2></legend>
      <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">*
            <?php echo $genderErr;?>
        </span>
        <br><br>
        <hr>
                      <input type="submit" name="submit" value="Submit">

      </fieldset>
      
      <fieldset >
            <legend><h2>DEGREE</h2></legend>
      <input type="checkbox" name="degree[]" value="SSC">SSC
        <input type="checkbox" name="degree[]" value="HSC">HSC
        <input type="checkbox" name="degree[]" value="BSc">BSc
        <input type="checkbox" name="degree[]" value="MSc">MSc

        <span class="error">*
            <?php echo $degreeErr;?>
        </span>
        <br><br>
        <hr>
                      <input type="submit" name="submit" value="Submit">

      </fieldset>

        <fieldset >
            <legend><h2>BLOOD GROUP</h2></legend>
            <select name="blood">
                <option value ="" >SELECT</option>

                <option value ="O+" >O+</option>
                  <option value ="O-">O-</option>
                  <option value ="A+">A+</option>
                  <option value ="A-">A-</option>
                  <option value ="B+">B+</option>
                  <option value ="B-">B-</option>
                    <option value ="AB+">AB+</option>
                  <option value ="AB-">AB-</option>
           </select>



        <span class="error">*
            <?php echo $bloodErr;?>
        </span>
        <br><br>
        <hr>
                      <input type="submit" name="submit" value="Submit">

      </fieldset>
      
      <br><br>

    </form>
  



    </body>
</html>