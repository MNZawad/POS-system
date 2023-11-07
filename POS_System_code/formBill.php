
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
<h3>Billing Form</h3>
<script src="app.js"></script>
<form name="billForm" action="backend.php" method="post" onsubmit="return generate()">
<br>
    <!-- <input type="text" id="oNo" name="oNo" placeholder="Orderno"/> -->
    <input type="text" id="cusName" name="cusName"  placeholder="Customer Name"/>
    <input type="text" id="cusPhone" name="cusPhone"  placeholder="Customer Phone No"/><br><br>

    <input type="text" id="pName1" name="pName" placeholder="Product Name"/>
    <input type="number" id="pQuantity1"  name="pQuantity"  placeholder="Product Quantity"/>
    <input type="number" id="pPrice1"  name="pQuantity"   placeholder="Product Price"/><br>

    <input type="text" id="pName2" name="pName" placeholder="Product Name"/>
    <input type="number" id="pQuantity2"  name="pQuantity"  placeholder="Product Quantity"/>
    <input type="number" id="pPrice2"  name="pQuantity"   placeholder="Product Price"/><br>

    <input type="text" id="pName3" name="pName" placeholder="Product Name"/>
    <input type="number" id="pQuantity3"  name="pQuantity"  placeholder="Product Quantity"/>
    <input type="number" id="pPrice3"  name="pQuantity"   placeholder="Product Price"/><br>

    <input type="text" id="pName4" name="pName" placeholder="Product Name"/>
    <input type="number" id="pQuantity4"  name="pQuantity"  placeholder="Product Quantity"/>
    <input type="number" id="pPrice4"  name="pQuantity"   placeholder="Product Price"/><br>

    <input type="text" id="pName5" name="pName" placeholder="Product Name"/>
    <input type="number" id="pQuantity5"  name="pQuantity"  placeholder="Product Quantity"/>
    <input type="number" id="pPrice5"  name="pQuantity"   placeholder="Product Price"/><br>

    <input id="product" name="product" type="text" style="display:none">
    <input id="price" name="price" type="text" style="display:none">
    <input id="quantity" name="quantity" type="text" style="display:none">
    <input id="tprice" name="tprice" type="text" style="display:none">
    <input id="date" name="date" type="text" style="display:none">
    <button type="submit"  >Submit</button>
</form> 
</body>
</html>
