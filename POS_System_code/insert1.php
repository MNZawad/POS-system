<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$valid=1;

$user = $_POST["oName"];

$pass = $_POST["oPass"];
session_start();
$cb =$_SESSION['username'];

if(!empty($user)&&!empty($pass))
{
    $sql = "SELECT oName FROM operator";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 0) {
      
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
         
            if($user==$row["oName"])
            {
               $valid=0;
            }
          
        }
        if($valid)
        {
            
            $sql = "INSERT INTO  operator (oName,oPass,createdBy)  
            VALUES ('$user', '$pass', '$cb')";

            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully<br>
                <a href='home1.php'>Admin Home</a>";
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
        }
        else{
            echo "<br>This Username already taken<br>
            <a href='home1.php'>Admin Home</a>";
        }
    }

}
else
{
    echo " Fill out the empty field ";
}
mysqli_close($conn);
?>