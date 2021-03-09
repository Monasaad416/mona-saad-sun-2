<?php 


if(isset($_POST['submit'])){
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];


    $errors=[];
    // name validation 
    if(empty( $productName )){
        $errors[] = "You must enter product name";
    }elseif(strlen( $productName ) <=5 || strlen($productName) <= 255){
        $errors[] = "Product name must be minimum 5 chars & max 255chars";
    }

      // description validation 
      if(! is_string($description) ){
        $errors[] = "Product description must be string";
    }


      // price validation 
    if(empty($price)){
        $errors[] = "You must enter product price";
    }elseif($price <= 0 ){
        $errors[] = "Product price must be greater than zero ";
    }

    

    print_r ($errors);


    //display product details
    echo "Product Name is : $productName <br>";
    echo "Product Description is: $description  <br>";
    echo "Product Pice is:$price  <br>";
    echo "Product Price After Discount: " ;

    include "functions.php" ;
    

    echo getPriceWithDiscount($price);

}







