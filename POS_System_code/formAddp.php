<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

   <form action="insertAdd.php" method="POST" >
   <h1> <u>ADD product </u> </h1>
   
   <label for="pName">Select a product:</label><br>

    <select name="pName" id="pName">
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

        $sql = "SELECT * FROM productstore ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $value= $row["pName"];
                 echo "<option value='$value'>$value</option> ";
            
            }   
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    ?>
    </select>

    <!-- Product Name<input type="text" name="pName" required /> -->
    <br>Product Quantity:<br><input type="number" name="pQuantity" required /><br>
    <input class="red-col" type="submit" />
    </form>
</body>
</html>

