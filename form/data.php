<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "grades");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		};
		
		$name = $_POST['Uname'];
		$email = $_REQUEST['Uemail'];
		$gender = $_POST['Ugender'];
		$mailstatus = $_POST['receive'];

		$sql = "INSERT INTO grades (user_name,user_email, gender, mail_status )VALUES ('$name','$email','$gender','$mailstatus' )";
		
		if(mysqli_query($conn, $sql)){
         

			// echo nl2br("\n$name\n $email\n "
			// 	. "$gender\n $submit \n $mailstatus");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		};
		
		// Close connection
		


        $sql = 'SELECT user_name,user_email, gender, mail_status FROM grades';
        // mysqli_select_db($conn,$dbname);
        $result = mysqli_query($conn,$sql );
        
        if(! $result ) {
           die('Could not get data: ' . mysqli_error($conn));
        }
     
     
        if (mysqli_num_rows($result) > 0) {
           // output data of each row
     
           // echo "<table>";
           while($row = mysqli_fetch_assoc($result)) {
           

            echo "<table>";
         
           echo "<tr>";
        echo "<td> user name:{$row['user_name']}  </td>  "
       . " <td> user email : {$row['user_email']} </td>  "
        ." <td>user gender : {$row['gender']} </td>  "
        ." <td>mail_status: {$row['mail_status']} </td> ";
        echo "</tr >";
        echo "</table>";
           }
           // echo "</table>";
     
         } else {
           echo "0 results";
         };
         /* //Its a good practice to release cursor memory
         mysqli_free_result($result);
         */
        echo "Fetched data successfully\n";
        
        mysqli_close($conn);
		?>
	</center>
</body>

</html>
