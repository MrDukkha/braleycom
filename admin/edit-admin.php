<?php
require_once('../includes/initialize.php');


if(!isset($_GET['id'])){
    header("Location: index.php");
  }
  
  $id = $_GET['id'];



if(isset($_POST['submit'])) {
 

    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['hashed_pass'];
    $is_admin = $_POST['is_admin'];

    $result = update_user($fName, $lName, $email, $username, $password, $is_admin, $id);
    if($result === true){
        header("Location: index.php");
    }
} else {
    $user = find_user_by_id($id);
}
    



include('../shared/admin-header.php');
?>






<form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstName">First Name:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="firstName" placeholder="First Name" value="<?php echo hsc($user['firstName']); ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastName">Last Name:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="lastName" placeholder="Last Name" value="<?php echo hsc($user['lastName']); ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo hsc($user['email']); ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo hsc($user['username']); ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-4">
      <input type="password" class="form-control" name="hashed_pass" placeholder="Password" value="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Admin:</label>
    <div class="col-sm-4">
        <input type="hidden" name="is_admin" value="0"/>  
        <input type="checkbox" name="is_admin" value="1" <?php if($user['is_admin'] == 1) { echo " checked";} ?>/>
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
