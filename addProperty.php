<?php include("header.php") ?>

<!--  Hero -->
<div class="jumbotron jumbotron-fluid" id="add">
  <!-- <img class="img-fluid" src="img/home.jpeg" alt="" id="hero-img"> -->
  <div class="container card">
    <h2 class="">Add a Property</h2>
    <p class="">Fill the following form and Add your House to our database!</p>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
      <input type="text" name="propertyName" value="" placeholder="Property Name" class="col-sm-11">
      <input type="text" name="address" value="" placeholder="Property's Address" class="col-sm-5">
      <input type="text" name="communityName" value="" placeholder="Community Name" class="col-sm-5">
      <input type="text" name="propertySize" value="" placeholder="How big is the Property" class="col-sm-5">
      <input type="text" name="price" value="" placeholder="Prize for your property" class="col-sm-5">
      <select name="beds" class="ml-auto mr-auto">
        <option value="1">Number of Beds</option>
        <option value="1">1 Bed</option>
        <option value="2">2 Beds</option>
        <option value="3">3 Beds</option>
        <option value="4">+4 Beds</option>
      </select>
      <select name="bathrooms" class="ml-auto mr-auto">
        <option value="1">Number of Bathrooms</option>
        <option value="1">1 Bath</option>
        <option value="2">2 Baths</option>
        <option value="3">3 Baths</option>
        <option value="4">4 Baths</option>
      </select>
      <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
      <label for="imageUpload"><strong>Property image:</strong></label>
        <input type="file" name="image" value="" id="imageUpload">
      <input type="submit" name="upload" value="submit" class="ml-auto mr-auto">
    </form>
  </div>
</div>

<?php if($_POST['propertyName']) { ?>
  <?php $db = mysqli_connect('localhost','id3225676_admin', 'HurryGotta12', 'id3225676_realestate_db') or die("Couldn't Connect"); ?>

  <?php
  $target = "images/" . ($_FILES['image']['name']);
  $image = $_FILES['image']['name'];
  $name = $_POST['propertyName'];
  $address = $_POST['address'];
  $community = $_POST['communityName'];
  $size = $_POST['propertySize'];
  $price = $_POST['price'];
  $beds = $_POST['beds'];
  $baths = $_POST['bathrooms'];

  $query = "INSERT INTO realestate_table(name, address, community, size, price, beds, baths, image) VALUES('$name', '$address', '$community', '$size', '$price', '$beds', '$baths', '$image');";
   ?>

  <?php
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    mysqli_query($db, $query);
  print_r($_FILES);
  ?>



  <?php mysqli_close($db); ?>
<?php } ?>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
<script type="text/javascript" src="app.js"></script>
</html>
