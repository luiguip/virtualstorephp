<?php include("header.php") ?>
<?php include("connect.php") ?>
  <?php
   function insertProduct($name,$price,$connection){
     $query = "insert into products (name,price) values ('{$name}',{$price})";
     return mysqli_query($connection,$query);
   }
   $name = $_GET["name"];
   $price = $_GET["price"];
   if(insertProduct($name, $price, $connection)){
  ?>
    <p class="text-success">Product <?php echo $name ?> , <?php echo $price ?>$ added with success!</p>
 <?php
    }else{
      $errMsg = mysqli_error($connection);
  ?>
    <p class="text-danger">Error adding product<br/><?php echo $errMsg ?> </p>
 <?php
    }
   mysqli_close($connection);
 ?>
<?php include("footer.php") ?>
