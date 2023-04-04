<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:tomato;
        }
        table, th, td {
  border: 1px solid  black;

}
</style>
</head>
<body>
    <h1>Application name : PHP class registration</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        
            <tr>
                <td></td>
            </tr>
            
            <?php


$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
];
                function inser_array_in_table($students = array()){
                    
                    foreach ($students as $row) {

                    

                    echo '<tr>';
                        $style = $row["status"] == 'CMS' ? 'style ="color:red"': '' ;

                        echo"<td $style>{$row['name']}</td>";
                        echo"<td $style>{$row['email']}</td>";
                        echo"<td $style>{$row['status']}</td>";
                        echo '<tr>';
                   
                    }
                    

                }   
                
                    echo inser_array_in_table($students);


                    
            ?>
        </tbody>
    </table>



</body>
</html>