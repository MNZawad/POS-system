
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

    $sql = "SELECT * FROM productstore";
    $result = mysqli_query($conn, $sql);
    echo "<table border='1' style='background-color: yellow' >";
    echo "<h1>Storage</h1>";
    echo "<tr>";
    echo "<th>Product Name</th><th>Product Quantity</th><th>Product Price</th>";
    echo "</tr>";
    if (mysqli_num_rows($result) >= 0) {
      
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            //echo $row["FirstName"]. " " . $row["LastName"] . "<br>";
            

            echo "<tr>";
            echo "<td>".$row["pName"] . "</td>"; 
            echo "<td>".$row["pQuantity"] . "</td>"; 
            echo "<td>".$row["pPrice"] . "</td>"; 
           // echo "<br>";
            echo "</tr>";
            
        }
      
    }
    echo "</table>";
    //echo "<button onclick='print()' >Print Slip</button><br>";
    echo "<button ><a href='home.php'>Home</a></button>";
    //echo "<a href='home.php'>Home2</a>";


mysqli_close($conn);
?>