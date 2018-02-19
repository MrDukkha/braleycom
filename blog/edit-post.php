<?php
require_once('../includes/initialize.php');

$id = $_GET['id'];
$post = get_post_by_id($id);

if(isset($_POST['submit'])) {
    $title = $description = $content = "";

    $title = $_POST['postTitle'];
    $description = $_POST['postDesc'];
    $content = $_POST['postCont'];
    
    update_post($title, $description, $content, $id);
}

    

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BraleyCom</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../assets/js/tinymce/tinymce.min.js">
    </script>
    <script>tinymce.init({ selector:'textarea' });</script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </div>
</nav>
<div id="container">
<a href="index.php">&laquo; Back to Post List</a>
<form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2">Title:</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="postTitle" value="<?php echo $post['postTitle']; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Description:</label>
    <div class="col-sm-4">
      <textarea name="postDesc"><?php echo $post['postDesc']; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Content:</label>
    <div class="col-sm-4">
      <textarea name="postCont"><?php echo $post['postCont']; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>