<?php include("header.php") ;
  include("connect.php");
  include("data-category.php");
  $categories=listCategories($connection);
?>
  <h1>Product Form</h1>
  <form action="newproduct.php" method="post">
    <table class="table">
      <tr>
        <td>Name:</td>
        <td><input type="text" class="form-control" name="name"></td>
      </tr>
      <tr>
        <td>Price:</td>
        <td><input type="number" class="form-control" name="price"></td>
      </tr>
      <tr>
        <td>Description:</td>
        <td><textarea name="description" class="form-control"></textarea></td>
      <tr>
        <td>Category:</td>
        <td>
          <?php
              foreach ($categories as $category) {
            ?>
                <input type="radio" name="category_id" value="<?=$category['id']?>"><?=$category['name']?></br>
            <?php
          }
            ?>
        </td>
      </tr>
      <tr>
        <td><input type="submit" class="btn btn-primary" value="register"></td>
      </tr>
    </table>
  </form>
<?php include("footer.php") ?>
