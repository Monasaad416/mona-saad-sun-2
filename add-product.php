<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <form method="POST" action="handle-add-product.php" >
        <input type="text" placeholder="Enter Product Name" name="productName"/>
        <br>
        <textarea placeholder="Enter Product Description" name="description" rows="4" cols="50"></textarea>
        <br>
        <input type="number" placeholder="Enter Product Price"  name="price" />
        <br>
        <input type="submit" value="submit" name="submit"/>
    </form>
    
</body>
</html>