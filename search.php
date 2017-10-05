<?php include('header.php'); ?>

<p>
  Lorem ipsum so i can see the db query
  Lorem ipsum so i can see the db query <br>
  Lorem ipsum so i can see the db query <br>
</p>

    <?php $db = mysqli_connect('localhost:8889', 'root', 'root', 'realestate_db') or die("can't conntect"); ?>

    <?php

    $query = "SELECT * FROM realestate_table;";
    $result = mysqli_query($db, $query);
    echo "<div class='container'><div class='row'>";
    while($row = mysqli_fetch_array($result)) {
      echo "<div class='col-3 card'>";
      echo "<h4>" . $row['name'] . "</h4>";
      echo "<h6>" . $row[beds] . " Beds/ " .
        $row["baths"] . " Baths/ " .
        $row["size"] . "sqft." . "</h6>";
      echo "<p>" . $row['address'] . "</p>";
      echo "<p>" . $row['community'] . "</p>";
      echo "<p>" . "$" . $row['price'] . "</p>";
      echo "</div>";
    }
    echo "</div></div>";

    ?>

    <?php mysqli_close($db); ?>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
