<?php include('header.php') ?>

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

<h2>Contact</h2>

<form class="" action="contact.php" method="post">
  <p>Name</p>
  <input type="text" name="first_name" value="" id="first_name">
  <label for="first_name">First</label>

  <input type="text" name="last_name" value="" id="last_name">
  <label for="last_name">Last</label>

  <p>Email</p>
  <input type="text" name="email" value="">

  <p>Phone</p>
  <input type="text" name="phone" value="">

  <p>Best Time to reach me</p>
  <select class="" name="time">
    <option value="morning">Morning</option>
    <option value="afternoon">Afternoon</option>
    <option value="night">Night</option>
  </select>

  <p>Comments</p>
  <textarea name="name" rows="8" cols="100"></textarea>
</form>
