<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
<h2>SIGN UP</h2>
<p>Please fill this to create account.</p>
            <form  method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">User Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name = "Uname">
                </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name = "Upass">
               </div>
               <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name = "Co_Upass">
               </div>
              <a href="./login.php"> <button type="submit" class="btn btn-primary" value="submit" name="submit">CREATE </button></a>
              <p>Already have an account? <a href="./login.php">Log in here.</a></p>
            </form>
        </div>
    </div>
</div>

<?php
            ////////////////////////* Connect to database *////////////////////////
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "PHPD5";
            $conn = mysqli_connect($host, $username, $password, $dbname);

            if (!$conn) {
            	die("Connection failed: " . mysqli_connect_error());
            }
            
            ////////////////////////! CREATE TABLE IN DATABASE *////////////////////////
            //     $sql = "CREATE TABLE IF NOT EXISTS SIGNUP(
            //    id int AUTO_INCREMENT PRIMARY KEY , 
            //    user_name VARCHAR(255) NOT NULL ,
            //    user_pass INT(25) NOT NULL,
            //    user_COpass INT(25) NOT NULL
            //    )";
            // $retval = mysqli_query( $conn,$sql );
   
            // if(! $retval ) {
            //    die('Could not create table: ' . mysqli_error($conn));
            // }
             
            // echo "<br>Database Table  created successfully\n";


            ////////////////////////^ GET DATA IN TABLE *////////////////////////
            if($_SERVER["REQUEST_METHOD"]=="POST"
             && isset($_POST['Uname']) 
             && isset($_POST['Upass']) 
             && isset($_POST['Co_Upass']))
            {
                    $userName = $_POST['Uname'];
                    $userPass = $_POST['Upass'];
                    $userCoPass = $_POST['Co_Upass'];

                    $sql = "INSERT INTO signup (user_name,user_pass,user_COpass) VALUES ('$userName','$userPass','$userCoPass')";
                    if ($conn->query($sql) == TRUE) {
                        echo "New user created successfully";
                         header("Location: login.php");
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    };
                    $retval = mysqli_query( $con,$sql );
                                mysqli_close($con);
            }
            
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>