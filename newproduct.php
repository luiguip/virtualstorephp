<?php include("header.php") ?>
  <?php
   $name = $_GET["name"];
   $price = $_GET["price"];
   $query = "insert into products (name,price) values ('{$name}',{$price})";
   $connection = mysqli_connect('localhost','root','toor','store');
   if(mysqli_query($connection,$query)){
  ?>
    <p class="alert-success">Product <?php echo $name ?> , <?php echo $price ?>$ added with success!</p>
 <?php
    }else{
  ?>
    <p class="alert-danger">Error adding product</p>
 <?php
    }
   mysqli_close($connection);
 ?>
<?php include("footer.php") ?>
