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
                        // echo "<p style=color:red;>enter your data </p>";

                    };
                    $retval = mysqli_query( $con,$sql );
                                mysqli_close($con);
                               
            }
            else{
                header("Location: register.php");
                echo "<p style=color:red;>enter your data </p>";
            }
            
?>