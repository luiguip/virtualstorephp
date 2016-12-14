<?php
  include("connect.php");
  include("data-product.php");
  $id=$_POST['id'];
  deleteProduct($id,$connection);
  header("Location: productlist.php?removed=true");
  die();
?>
