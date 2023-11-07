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

$user = $_POST["oName"];

$pass = $_POST["oPass"];

if(!empty($user)&&!empty($pass))
{
    $sql = "SELECT * FROM operator";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 0) {
      
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           
            if($user==$row["oName"] && $pass==$row["oPass"] )
            {
               $valid=1;
            }
          
        }
        if($valid)
        {
            
            session_start();
            $_SESSION['operatorname'] = $user;
            header('Location:home2.php');
        
        }
        else{
            echo ("<script>
            window.alert('Wrong Username or Password');
            window.location.href='formOS.php';
            </script>");
        }
    }

}
else
{
    echo " Fill out the empty field ";
}
mysqli_close($conn);
?>