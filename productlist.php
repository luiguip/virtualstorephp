<?php include("header.php"); ?>
<?php
  include("connect.php");
  include("data-product.php");?>
<br/>
  <h1>Product List</h1>
<br/>
<?php
  if(array_key_exists("removed", $_GET) && $_GET['removed']=="true"){
?>
  <p class="text-success">Product excluded with Success</p>
<?php
  }
?>
<table class="table table-striped table-bordered">
  <?php
    $products = listProducts($connection);
    foreach ($products as $product) {
  ?>
    <tr>
      <td>
        <?php echo $product['name'] . "<br/>"; ?>
      </td>
      <td>
        <?php echo $product['price'] . "<br/>"; ?>
      </td>
      <td>
        <a class="text-danger" href="remove-product.php?id=<?= $product['id']?>">remove</a>
      </td>
    </tr>
  <?php
    }
  ?>
</table>
<?php include("footer.php") ;?>
