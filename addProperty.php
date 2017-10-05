<?php include("header.php") ?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<form action="addProperty.php" method="post">
  <input type="text" name="propertyName" value="" placeholder="Property Name">
  <input type="text" name="address" value="" placeholder="Property's Address'">
  <input type="text" name="communityName" value="" placeholder="Community Name">
  <input type="text" name="size" value="" placeholder="How big is the Property">
  <input type="text" name="price" value="" placeholder="Prize for your property">
  <select name="beds">
    <option value="beds">Number of Beds</option>
    <option value="1">1 Bed</option>
    <option value="2">2 Beds</option>
    <option value="3">3 Beds</option>
    <option value="4">+4 Beds</option>
  </select>
  <select name="bathrooms">
    <option value="baths">Number of Bathrooms</option>
    <option value="1">1 Bath</option>
    <option value="2">2 Baths</option>
    <option value="3">3 Baths</option>
    <option value="4">4 Baths</option>
  </select>
  <input type="submit" name="" value="submit">
</form>

<?php echo $_POST['propertyName']; ?>

<?php if($_POST['propertyName']) { ?>
  <?php $db = mysqli_connect('localhost:8889','root', 'root', 'realestate_db') or die("Couldn't Connect"); ?>

  <?php
  $name = $_POST['propertyName'];
  $address = $_POST['address'];
  $community = $_POST['communityName'];
  $size = $_POST['size'];
  $price = $_POST['price'];
  $beds = $_POST['beds'];
  $baths = $_POST['bathrooms'];

  $query = "INSERT INTO realestate_table(name, address, community, size, price, beds, baths) VALUES('$name', '$address', '$community', '$size', '$price', '$beds', '$baths');";
   ?>

  <?php mysqli_query($db, $query); ?>



  <?php mysqli_close($db); ?>
<?php } ?>
