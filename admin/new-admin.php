<?php
require_once('../includes/initialize.php');

$admins = get_admins();

if(isset($_POST['submit'])) {
  // set default to ""
  $fName = $lName = $email = $username = $password = $is_admin = "";

  $fName = $_POST['firstName'];
  $lName = $_POST['lastName'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['hashed_pass'];
  $is_admin = $_POST['is_admin'];

  insert_user($fName, $lName, $email, $username, $password, $is_admin);

}


include('../shared/loggedin-header.php');
?>






<form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstName">First Name:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="firstName" placeholder="First Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastName">Last Name:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="lastName" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" name="hashed_pass" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Admin:</label>
    <div class="col-sm-4">
        
        <input type="checkbox" name="is_admin" value="1"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
