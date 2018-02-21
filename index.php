<?php
require_once('includes/initialize.php');
$author = $_SESSION['username'];
$result = get_post_by_author($author);
if(logged_in()) {
  include('shared/loggedin-header.php');
} else {
  include('shared/default-header.php');
}

?>




    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Welcome to Braley's Blog</h1>
        <p>A place where the rubber meets the road and I can get my thoughts, idea's, and tech stuff out there.</p>
        <p>I hope you enjoy and welcome comments and critcism.</p>
      </div>

      

      <div class="row">

        <div class="col-sm-8 blog-main">
          <?php while($post = mysqli_fetch_assoc($result)) { ?>
          <div class="blog-post">
            <h2 class="blog-post-title">
              <?php echo $post['postTitle']; ?>
            </h2>
            <p class="blog-post-meta">
              <?php echo $post['postDate']; ?> by
              <a href="#"><?php echo $post['author']; ?></a>
            </p>
            <p class="blog-post-meta">
              <?php echo $post['postDesc']; ?>
            </p>
            <p>
              <a href="<?php echo 'view_post.php?id=' . $post['postID']; ?>">Read More</a>
            </p>
          </div>
          <!-- /.blog-post -->
          <?php } ?>
          <?php mysqli_free_result($result); ?>
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