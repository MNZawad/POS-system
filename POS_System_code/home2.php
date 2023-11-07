

<html>
    <header>
    <link rel="stylesheet" href="style.css">
    </header>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION['operatorname'])){
                echo ("<script>
            window.alert('Sign in to continue');
            window.location.href='formOS.php';
            </script>");
            }
            else{
                echo "<h1><a>Home for Operator</a></h1>
                <a href='formOPcng.php'>Change Password</a><br>";

                if(isset($_SESSION['operatorname'])){
                    echo "<a href='formBill.php'>Generate Bill</a><br>
                    <a href='logout.php'>Logout</a>";
                }

                
            }
        ?>
    </body>
</html>



