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
session_start();
$cb =$_SESSION['operatorname'] ;


//$order = $_POST["oNo"];
$cname = $_POST["cusName"];
$cPhone = $_POST["cusPhone"];
$pro = $_POST["product"];
$pri = $_POST["price"];
$quan = $_POST["quantity"];
$tp = $_POST["tprice"];
$d = $_POST["date"];
$quantity = 0;
$str_quan = explode (",", $quan); 
$str_pro = explode (",", $pro); 


$_SESSION['cphone'] = $cPhone;

// for($i=0;$i<count($str_quan);$i++){
//     echo $str_quan[$i];
//     echo $str_pro[$i];
// }


if(!empty($cname)&&!empty($cPhone)&&!empty($pro)&&!empty($pri)&&!empty($quan)&&!empty($tp)&&!empty($d))
{
            

            $sql = "INSERT INTO  bill (cusName,cusPhone,product,price,quantity,tprice,date,createdBy)  
            VALUES ( '$cname', '$cPhone', '$pro', '$pri', '$quan', '$tp', '$d','$cb')";

           
            if (mysqli_query($conn, $sql)) {
                //echo "New record created successfully<br>";
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
        
            for($i=0;$i<count($str_quan);$i++){
                $sql = "SELECT * FROM productstore";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) >= 0) {
      
        // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
             
                    if($str_pro[$i]==$row["pName"])
                    {
                    $qu =  $row["pQuantity"];
                    $quantity = $qu - $str_quan[$i];
                    }
                
                }
                }
                $sql = "UPDATE productstore SET pQuantity='$quantity' WHERE pName='$str_pro[$i]'";

                if (mysqli_query($conn, $sql)) {
                
                   // header('Location:home2.php');
                } 
                else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            
            }

            echo "<br>
            <a href='pdf.php'>Go for Printing Slip</a><br>
            <a href='home1.php'>Home1</a>";
  
}
else
{
    echo " Fill out the empty field ";
    header('Location:index.php');
}
mysqli_close($conn);
?>