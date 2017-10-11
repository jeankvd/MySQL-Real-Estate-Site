<?php include('header.php'); ?>

    <?php $db = mysqli_connect('localhost','id3225676_admin', 'HurryGotta12', 'id3225676_realestate_db') or die("can't conntect"); ?>

    <?php


    if (isset($_POST['submit'])) {

      $name = $_POST['name'];
      $beds = $_POST['beds'];
      $bathrooms = $_POST['bathrooms'];
      $min_price = $_POST['min-price'];
      $max_price = $_POST['max-price'];
      $query = "SELECT * FROM realestate_table  WHERE ";

      if (!empty($_POST['name'])) { $query = $query . "name = $name AND "; }
        $query = $query . "beds >= $beds AND ";
        $query = $query . "baths >= $bathrooms AND ";
        $query = $query . "price > $min_price AND ";
        $query = $query . "price < $max_price";
        $query = $query . ";";
    } else {
        $query = "SELECT * FROM realestate_table;";
    }


    if (!empty($_POST['id'])) {
      $id = $_POST['id'];

      mysqli_query($db, "DELETE FROM realestate_table WHERE id = $id;");
      echo "Deleted Home from Database";
    }
    $result = mysqli_query($db, $query);

    echo "<div class='container' id='search-container'><div class='row' id='row'>";
    while($row = mysqli_fetch_array($result)) {
      echo "<div class='col-sm-3 card'>";
      echo "<img class='card-img-top img-fluid' alt='Card image' src='images/".$row['image']."' >";
      echo "<h4 class='card-title'>" . $row['name'] . "</h4>";
      echo "<h6>" . $row['beds'] . " Beds/ " .
        $row["baths"] . " Baths/ " .
        $row["size"] . "sqft." . "</h6>";
      echo "<p> <strong>Address</strong>: " . $row['address'] . "</p>";
      echo "<p> <strong>Community</strong>: " . $row['community'] . "</p>";
      echo "<p> <strong>Price</strong>: " . "$" . $row['price'] . "</p>";
      echo "<div class='delete' id='" . $row['id'] . "'>x</div>";
      echo "</div>";
    }
    echo "</div></div>";

    ?>

    <?php mysqli_close($db); ?>

    <div id="deleteProperty">
      <h3>Are you sure you want to delete this Property?</h3>
      <form class="" action="search.php" method="post">
        <input value="" name="id" id="id">
        <input type="submit" class="btn" name="yes" value="Yes I do.">
        <a href="search.php" class="btn" id="noButton">No!</a>
      </form>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
  <script type="text/javascript" src="app.js"></script>

</html>
