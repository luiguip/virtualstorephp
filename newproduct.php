<?php include("header.php"); ?>
<?php
  include("connect.php");
  include("data-product.php");
 $name = $_POST["name"];
 $price = $_POST["price"];
 $description = $_POST["description"];
 $category_id=$_POST["category_id"];
 if(insertProduct($name, $price, $description, $category_id, $connection)){
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
