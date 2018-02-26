<?php
require_once('../includes/initialize.php');

$id = $_GET['id'];
$post = get_post_by_id($id);

if(isset($_POST['submit'])) {
    delete_post($id);
}

$title = "Delete Post";

include('../shared/loggedin-header');

?>


<div class="container">
<h1>Are you sure you want to delete this Post?</h1><br><hr>
<p><h2><?php echo $post['postTitle']; ?></h2></p>
<form class="form-horizontal" action="" method="post">
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Delete</button>
    </div>
  </div>
</form>
</div>