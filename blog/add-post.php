<?php
require_once('../includes/initialize.php');


if(isset($_POST['submit'])) {
  // set default to ""
  $title = $description = $content = $author = "";

  $title = $_POST['postTitle'];
  $description = $_POST['postDesc'];
  $content = $_POST['postCont'];
  $author = $_SESSION['username'] ?? 'unknown';

  insert_post($title, $author, $description, $content);

}

include('../shared/blog-header.php');
?>






<form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Title:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="postTitle" placeholder="Enter Blog Title">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Description:</label>
    <div class="col-sm-4">
      <textarea name="postDesc"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Content:</label>
    <div class="col-sm-4">
      <textarea name="postCont"></textarea>
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
