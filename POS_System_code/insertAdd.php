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

$name = $_POST["pName"];

$quantity = $_POST["pQuantity"];


if(!empty($name)&&!empty($quantity))
{
    $sql = "SELECT * FROM productstore";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 0) {
      
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           
           

            if($name==$row["pName"])
            {
               $quan =  $row["pQuantity"];
               $quantity = $quantity + $quan;
              
               $valid=1;
            }
          
        }
        if($valid)
        {
            
            $sql = "UPDATE productstore SET pQuantity='$quantity' WHERE pName='$name'";

            if (mysqli_query($conn, $sql)) {
                echo "New record updated successfully<br>
                <a href='home1.php'>Admin Home</a>";
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
        }
        else{
            echo "<br>Product Name $name does not exist in the table";
        }
    }

}
else
{
    echo " Fill out the empty field ";
}
mysqli_close($conn);
?>