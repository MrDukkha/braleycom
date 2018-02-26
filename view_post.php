<?php
require_once('includes/initialize.php');

$id = $_GET['id'];

$result = get_post_by_id($id);

include('shared/default-header.php');

?>




    <div class="container">
      <div class="jumbotron">
        <h1 class="blog-post-title">
          <?php echo $result['postTitle']; ?>
        </h1>
        <p class="blog-post-meta">
          <?php echo $result['postDate']; ?> by <a href="#"><?php echo $result['author']; ?></a>
        </p>
        <p class="blog-post-meta">
          <?php echo $result['postDesc']; ?>
        </p>
      </div>


      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <p class="blog-post-meta">
              <?php echo $result['postCont']; ?>
            </p>
            <?php if(logged_in()) { ?>
            <p>
              <a href="<?php echo 'blog/edit-post.php?id=' . $result['postID']; ?>">Edit Post</a>
            </p>
            <?php } ?>
          </div>
          <!-- /.blog-post -->
        </div>
        <!-- /container -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
          crossorigin="anonymous"></script>
  </body>

  </html>