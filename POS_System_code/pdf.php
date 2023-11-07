

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
session_start();
$cph = $_SESSION['cphone'] ;

if(!empty($cph))
{
    $sql = "SELECT * FROM bill";
    $result = mysqli_query($conn, $sql);
    echo "<table border='1' style='background-color: yellow' >";
    echo "<h1>Bill</h1>";
    echo "<tr>";
    echo "<th>Order No</th><th>Customer Name</th><th>Customer Phone</th><th>Product Name</th><th>Quantity</th><th>Price</th><th>Total Price</th><th>Date</th><th>Created by</th>";
    echo "</tr>";
    if (mysqli_num_rows($result) >= 0) {
      
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            //echo $row["FirstName"]. " " . $row["LastName"] . "<br>";
            if($cph==$row["cusPhone"]){

            echo "<tr>";
            echo "<td>".$row["oNo"] . "</td>"; 
            echo "<td>".$row["cusName"] . "</td>"; 
            echo "<td>".$row["cusPhone"] . "</td>"; 
            echo "<td>".$row["product"] . "</td>"; 
            echo "<td>".$row["quantity"] . "</td>"; 
            echo "<td>".$row["price"] . "</td>";  
            echo "<td>".$row["tprice"] . "</td>";  
            echo "<td>".$row["date"] . "</td>";  
            echo "<td>".$row["createdBy"] . "</td>";  
            echo "<br>";
            echo "</tr>";
            }
            else{
                //echo "No scuh order $ord";
            }
          
        }
      
    }
    echo "</table>";
    echo "<button onclick='print()' >Print Slip</button><br>";
    echo "<button ><a href='home2.php'>Home</a></button>";
    //echo "<a href='home2.php'>Home2</a>";

}
else
{
    echo " Fill out the empty field ";
}
mysqli_close($conn);
?>