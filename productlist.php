<?php include("header.php"); ?>
<?php
  include("connect.php");
  include("data-product.php");?>
<br/>
  <h1>Product List</h1>
<br/>
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
    </tr>
  <?php
    }
  ?>
</table>
<?php include("footer.php") ;?>
