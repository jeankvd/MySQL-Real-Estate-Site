
<?php include('header.php'); ?>

    <!--  Hero -->
    <div class="jumbotron jumbotron-fluid" id="hero">
      <!-- <img class="img-fluid" src="img/home.jpeg" alt="" id="hero-img"> -->
      <div class="container card">
        <h2 class="">Find Your New Home</h2>
        <p class="">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        <form action="search.php" method="post">
          <input type="text" name="name" value="" placeholder="House Name" class="col-9">
          <select name="min-price" class="col-sm-5">
            <option value="1000">Min. Price</option>
            <option value="1000">$1,000</option>
            <option value="10000">$10,000</option>
            <option value="25000">$25,000</option>
            <option value="50000">$50,000</option>
          </select>
          <select name="max-price" class="col-sm-5">
            <option value="100000">Max. Price</option>
            <option value="10000">$10,000</option>
            <option value="25000">$25,000</option>
            <option value="50000">$50,000</option>
            <option value="100000">$100,000</option>
          </select>
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
          <input type="submit" name="submit" value="Find A Home">
        </form>
      </div>
    </div>
    <!-- End Hero -->
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
