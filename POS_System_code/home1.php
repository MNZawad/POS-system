<html>
    <header>
    <link rel="stylesheet" href="style.css">
    </header>
    <body>
    <h1><u>Home for Admin</u><h1>
    <!-- <br><br><br>Go to<br> -->
        <?php
            session_start();
            if(!isset($_SESSION['username'])){
                echo ("<script>
            window.alert('Sign in to continue');
            window.location.href='forma.php';
            </script>");
            }
            else{
                echo "
                <a href='form1.php'>Add a new operator</a> <br>
                <a href='formAddp.php'>Add Quantity</a> <br> 
                <a href='formDelete.php'>Delete a product</a> <br> 
                <a href ='formUPrice.php'>Update Price</a><br>
                <a href='formNPStore.php'>Add a new product</a><br>
                <a href='productstore.php'>Storage Condition</a><br>
                <a href='report.php'>Report</a><br>";

                if(isset($_SESSION['username'])){
                    echo "<a href='logout.php'>Logout</a>";
                }

                
            }
        ?>
    </body>
</html>