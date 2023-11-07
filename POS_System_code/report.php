<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pos";
$i=0;
$date = array();
$price = array();
$dprice = 0;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM bill order by date";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >= 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $date[$i] = $row["date"];
        $price[$i] = $row["tprice"];
        $i++;
    }
}
$p=0;
$j=0;
//echo "<form style='background-color: yellow'>"
echo "<table border='1' style='background-color: yellow' >";
echo "<h1>Sales Report</h1>";
echo "<tr>";
echo "<th>Date</th><th>Total Sale(In Taka)</th>";
echo "</tr>";
for($j=0;$j<$i;$j++){
    for($k=$j;$k<$i;$k++){
        if($date[$j]==$date[$k]){
            $dprice+=$price[$k];
            $p=$k;
        }
    }
    echo "<tr>";
    echo "<td>".$date[$j] . "</td>"; 
    echo "<td>".$dprice . "</td>";
    echo "<br>";
    echo "</tr>";
    $dprice = 0;
    $j = $p;
}
echo "</table>";
//echo "/form";
?>