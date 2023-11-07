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

$name = $_POST["pName"];

$quantity = $_POST["pQuantity"];
$price = $_POST["pPrice"];


if(!empty($name)&&!empty($quantity)&&!empty($price))
{
    $sql = "SELECT pName FROM productstore";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 0) {
      
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
         
            if($name==$row["pName"])
            {
               $valid=0;
            }
          
        }
        if($valid)
        {
            
            $sql = "INSERT INTO  productstore (pName,pQuantity,pPrice)  
            VALUES ('$name', '$quantity', '$price')";

            if (mysqli_query($conn, $sql)) {
                echo "New Product $name stored successfully<br>
                <a href='home1.php'>Admin Home</a>";
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
        }
        else{
            echo "<br>Product Name already exist";
        }
    }

}
else
{
    echo " Fill out the empty field ";
}
mysqli_close($conn);
?>