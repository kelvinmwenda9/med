<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h1>Registered Members</h1>

</body>
</html>

<?php

    $connection= mysqli_connect("localhost","root","","test_db");
    $sql="SELECT * FROM `data`";
    //yesterdays code
    //execute
    $dataframe= mysqli_query($connection, $sql);
    //count the data
    $num_rows = mysqli_num_rows($dataframe);
        if($num_rows==0){
            echo "No Record Found, Please register.";
        }
        else{
            while ($row= mysqli_fetch_array($dataframe)) 
            {
            echo "<br> Name :$row[3] <br>";
            echo "Date of Birth :$row[1] <br>";
            echo "Gender :$row[4] <br>";
            echo "Type Of Service :$row[2] <br>";
            echo "General Comments :$row[5] <br>";
            

            }
                
        }//PASTE HERE

        echo "Press: <a href='http://localhost/TEST/index.php'> this link to go back to form </a>";



?>

