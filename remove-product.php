<?php
  include("connect.php");
  include("data-product.php");
  $id=$_GET['id'];
  deleteProduct($id,$connection);
  header("Location: productlist.php");
  die();
?>
