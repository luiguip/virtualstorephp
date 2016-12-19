<?php
  function listProducts($connection){
    $products= array();
    $query = "select products.*,categories.name as category_name from products join categories on products.category_id=categories.id";
    $result = mysqli_query($connection,$query);
    while($product = mysqli_fetch_assoc($result)){
      array_push($products, $product);
    }
    return $products;
  }

   function insertProduct($name,$price,$description,$category_id,$connection){
     $query = "insert into products (name,price,description,category_id) values ('{$name}',{$price}, '{$description}',{$category_id})";
     return mysqli_query($connection,$query);
   }

   function deleteProduct($id,$connection){
     $query = "delete from products where id = {$id}";
     return mysqli_query($connection,$query);
   }
