<?php
require_once('../includes/initialize.php');


if(!logged_in()) {
  header("Location: ../login.php");
}

$result = get_post_by_author($_SESSION['username']);
$title = "Blog Admin";
include('../shared/blog-header.php');
?>




    <div class="container">
    <h2>Posts</h2>
  <p>Review, Edit, or Delete your posts here.</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Date</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $row['postTitle']; ?></td>
        <td><?php echo $row['postDate']; ?></td>
        <td><a class="" href="<?php echo '../view_post.php?id=' . $row['postID']; ?>">View</a></td>
        <td><a class="" href="<?php echo 'edit-post.php?id=' . $row['postID']; ?>">Edit</a></td>
        <td><a class="" href="<?php echo 'delete-post.php?id=' . $row['postID']; ?>">Delete</a></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
      

    </div> <!-- /container -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
