<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
.error {color: #FF0000;}
body{
    /* text-align:center; */
    margin:15px;
}
form{
    
    padding: 10px;
}
span{
    font-weight:bold;
}
</style>
</head>
<body>

<?php
$nameErr = $emailErr = $genderErr = $websiteErr =  $agreeErr ="";
$name = $email = $gender = $comment = $website =  $agree ="";
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


<div class="form-group mb-3 w-50">

<label for="exampleInputEmail1" class="form-label">  Name: </label>
 <input type="text" name="name"  class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>



  <label for="exampleInputEmail1" class="form-label">Email address</label>
   <input type="text" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>


  <label for="exampleInputEmail1" class="form-label">Group#</label>
<input type="text" name="website" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>


  <label for="exampleInputEmail1" class="form-label">Class Details</label>
   <textarea name="comment" rows="5" cols="40" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <br><br>



  <label lass="form-check-label " for="exampleCheck1">Gender</label>

  <input type="radio" name="gender" value="female" class="form-check-input" id="exampleCheck1">
  <label lass="form-check-label " for="exampleCheck1">Femal</label>

  <input type="radio" name="gender" value="male" class="form-check-input" id="exampleCheck1">
  <label lass="form-check-label " for="exampleCheck1">male</label>

  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  <h2>SELECT SUBJECTS</h2>
            <select name = 'subject[]' multiple size = 3 class="form-select" multiple aria-label="multiple select example"> 
                <option value = 'english'>ENGLISH</option>
                <option value = 'maths'>MATHS</option>
                <option value = 'computer'>COMPUTER</option>
                <option value = 'physics'>PHYSICS</option>
                <option value = 'chemistry'>CHEMISTRY</option>
                <option value = 'hindi'>HINDI</option>
            </select>
            
        </form>
        <br>
        <br>

        <div class="mb-3 form-check" style="width:50px">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="agree"  >
    <label class="form-check-label " for="exampleCheck1">agree</label>
    <span class="error">* <?php echo $agreeErr;?></span>
  </div>

  <input type = 'submit' name = 'submit' value = Submit  class="btn btn-primary my-2" >
</div>


</form>

   
<?php
// define variables and set to empty values
echo "<h2>Your Input:</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    echo "<span>your name is : </span>". $name;
    echo "<br>";
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    echo "<span>your email is : </span>".$email;
echo "<br>";
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else{
    $website = test_input($_POST["website"]);
    echo "<span>your group is : </span>".$website;
echo "<br>";
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
    echo "<span>your course details is : </span>".$comment;
echo "<br>";
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    echo "<span>your gender is : </span>".$gender;
echo "<br>";
  }


  if (empty($_POST["gree"])) {
    $agreeErr = "agree is required";
  } else {
    $agree = test_input($_POST["agree"]);
}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}







// Check if form is submitted successfully
if(isset($_POST["submit"]))
{
    // Check if any option is selected
    if(isset($_POST["subject"]))
    {
        // Retrieving each selected option
        foreach ($_POST['subject'] as $subject)
            print "<span>You selected :</span> .$subject.<br/>";
    }
else
    echo "Select an option first !!";
};




?>
</body>
</html> 