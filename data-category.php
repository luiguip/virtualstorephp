<?php
   function listCategories($connection){
     $categories=array();
     $query="select * from categories";
     $result = mysqli_query($connection,$query);
     while($category = mysqli_fetch_assoc($result)){
       array_push($categories, $category);
     }
     return $categories;
   }
