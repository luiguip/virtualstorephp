<?php
  function listProducts($connection){
    $products= array();
    $query = "select * from products";
    $result = mysqli_query($connection,$query);
    while($product = mysqli_fetch_assoc($result)){
      array_push($products, $product);
    }
    return $products;
  }

   function insertProduct($name,$price,$connection){
     $query = "insert into products (name,price) values ('{$name}',{$price})";
     return mysqli_query($connection,$query);
   }

   function deleteProduct($id,$connection){
     $query = "delete from products where id = {$id}";
     return mysqli_query($connection,$query);
   }
