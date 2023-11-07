<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

   <form action="insertStore.php" method="POST" >
   <h1> Create new product  </h1>
    Product Name:<br><input type="text" name="pName" required /><br>
    Product Quantity:<br><input type="number" name="pQuantity" required /><br>
    Price(in taka):<br><input type="number" name="pPrice" required/><br>
    <input class="red-col" type="submit" />
    </form>
</body>
</html>