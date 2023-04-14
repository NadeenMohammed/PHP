<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <style>
      table{
         border: 2px solid black;
      }
   </style>
</head>

<body>
	
<section>
<div class="container">
   <div class="row">
      <div class="col-md-6 my-4">
         
   <h1 >User List</h1>
   <hr>
    <a href="register.php">Add New User</a>
    
    <br><br>
    <table border=1 class="table table-striped-columns">
        <thead>
            <tr class="table-danger">
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Mail Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "PHP4";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // $sql = "CREATE TABLE IF NOT EXISTS PHP4(
            //    id int AUTO_INCREMENT PRIMARY KEY , 
            //    user_name VARCHAR(255) NOT NULL ,
            //    user_email VARCHAR(255) NOT NULL,
            //    gender VARCHAR(25) NOT NULL,
            //    mail_status VARCHAR(25) NOT NULL
            //    )";
            // $retval = mysqli_query( $conn,$sql );
   
            // if(! $retval ) {
            //    die('Could not create table: ' . mysqli_error($conn));
            // }
             
            // echo "<br>Database Table  created successfully\n";
            
            // If form is submitted, insert new user into database
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Uname']) && isset($_POST['Uemail']) && isset($_POST['Ugender'])) {
                $name = $_POST['Uname'];
                $email = $_POST['Uemail'];
                $gender = $_POST['Ugender'];
                $mail_status = isset($_POST['receive']) ? $_POST['receive'] : '';

                // Insert user into database
                $sql = "INSERT INTO PHP4 (user_name,user_email, gender, mail_status ) VALUES ('$name', '$email','$gender', '$mail_status')";

               
                if ($conn->query($sql) == TRUE) {
                    echo "New user created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                };
            };

            // Retrieve users from database and display them in a table
            $sql = "SELECT * FROM PHP4";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr class='table-success'>";
                    echo "<td class='table-success'>" .$row['user_name'] . "</td>";
                    echo "<td class='table-success'>" .$row['user_email'] . "</td>";
                    echo "<td class='table-success'>" .$row['gender'] . "</td>";
                    echo "<td class='table-success'>" .($row['mail_status'] ? $row['mail_status'] : 'Not Sent') . "</td>";
                   
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>0 results</td></tr>";
            }

            // Close database connection
            $conn->close();
            ?>
        </tbody>
    </table>
      </div>
   </div>
</div>
</section>
</body>

</html>
