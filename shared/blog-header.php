<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BraleyCom<?php if(isset($title)) { echo ' - ' . hsc($title); } ?> </title>
    
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
      crossorigin="anonymous">
      <link rel="stylesheet" href="../assets/css/styles.css">
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
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
            aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">C-Braley Dot Com</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="../index.php">Home</a>
            </li>
            <li>
              <a href="index.php">Blog</a>
            </li>
            <?php if(logged_in()) { ?>
            <li>
              <a href="add-post.php">Add Blog Post</a>
            </li>
            <li>
              <a href="blog-admin.php">Blog Admin</a>
            </li>
            <?php } ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php
          if(is_admin($_SESSION['user_id'])) { ?>
          <li>
              <a href="../admin/index.php">
                <span class="glyphicon glyphicon-user"></span> Admin</a>
            </li>
         <?php }?>
            <li>
              <a href="../logout.php">
                <span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>