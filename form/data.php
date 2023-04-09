<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	

   <h1>User List</h1>
    <a href="register.php">Add New User</a>
    <br><br>
    <table>
        <thead>
            <tr>
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
            $dbname = "grades";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // If form is submitted, insert new user into database
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Uname']) && isset($_POST['Uemail']) && isset($_POST['Ugender'])) {
                $name = $_POST['Uname'];
                $email = $_POST['Uemail'];
                $gender = $_POST['Ugender'];
                $mail_status = isset($_POST['receive']) ? $_POST['receive'] : '';

                // Insert user into database
                $sql = "INSERT INTO grades (user_name,user_email, gender, mail_status ) VALUES ('$name', '$email','$gender', '$mail_status')";
                if ($conn->query($sql) == TRUE) {
                    echo "New user created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                };
            };

            // Retrieve users from database and display them in a table
            $sql = "SELECT * FROM grades";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" .$row['user_name'] . "</td>";
                    echo "<td>" .$row['user_email'] . "</td>";
                    echo "<td>" .$row['gender'] . "</td>";
                    echo "<td>" .($row['mail_status'] ? $row['mail_status'] : 'Not Sent') . "</td>";
                    echo "<td>Send Mail</td>";
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
</body>

</html>
