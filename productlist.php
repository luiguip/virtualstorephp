<?php include("header.php"); ?>
<?php include("connect.php");?>
<?php
  $query = "select * from products";
  $result = mysqli_query($connection,$query);
  while($products = mysqli_fetch_assoc($result)){
    echo($products['name']."</br>");
  }

 ?>
<?php include("footer.php") ;?>
