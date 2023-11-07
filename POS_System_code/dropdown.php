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
