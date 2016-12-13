<?php include("header.php") ?>
  <h1>Product Form</h1>
  <form action="newproduct.php">
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
        <td><input type="submit" class="btn btn-primary" value="register"></td>
      </tr>
    </table>
  </form>
<?php include("footer.php") ?>
