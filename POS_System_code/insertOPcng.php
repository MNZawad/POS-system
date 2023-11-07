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
$valid=0;

$pass = $_POST["oPass"];
$npass = $_POST["oNPass"];
$cnpass = $_POST["oCNPass"];
session_start();
$cb =$_SESSION['operatorname'] ;

if(!empty($pass) && !empty($npass) && !empty($cnpass))
{
    $sql = "SELECT * FROM operator";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 0) {
      
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
         
            if($cb==$row["oName"] && $pass==$row["oPass"])
            {
               $valid=1;
            }
          
        }
        if($valid)
        {
            if($npass==$cnpass)
            {
                $sql = "UPDATE operator SET oPass='$npass' WHERE oName='$cb'";
                if (mysqli_query($conn, $sql)) {
                    echo "New record updated successfully<br>";
                    header('Location:home2.php');
                } 
                else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
            }
            else
            {
                echo "<a href='formOPcng.php'>Try angain</a>";
                echo "<br>Confirm new password didn't match<br> ";
                
            }
        }
        else{
            echo "<br>Wrong username or password";
            
        }
    }

}
else
{
    echo " Fill out the empty field ";
}
mysqli_close($conn);
?>