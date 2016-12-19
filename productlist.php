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
        <?= $product['name'] ?>
      </td>
      <td>
        <?= $product['price'] ?>
      </td>
      <td>
        <?= substr($product['description'], 0, 40) ?>
      </td>
      <td>
        <?=$product['category_name']?>
      </td>
      <td>
        <form  action="remove-product.php" method="post">
          <input type="hidden" name="id" value="<?= $product['id']?>">
          <button class="btn btn-danger" >remove</button>
        </form>
      </td>
    </tr>
  <?php
    }
  ?>
</table>
<?php include("footer.php") ;?>
