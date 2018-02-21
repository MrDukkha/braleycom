<?php
require_once('../includes/initialize.php');

$admins = get_users();

include('../shared/admin-header.php');
?>

    


        <div class="container">

            <h2>Admins</h2>
            <p>Review, Edit, or Delete Admins here.</p>
            <br>
            <br>
            <p>
                <a href="new-admin.php">Create Admin</a>
            </p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Admin</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($admins)) { ?>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['is_admin'] == 1 ? 'true' : 'false'; ?>
                        </td>
                        <td>
                            <?php echo $row['firstName']; ?>
                        </td>
                        <td>
                            <?php echo $row['lastName']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                        <td>
                            <a class="" href="<?php echo 'edit-admin.php?id=' . $row['id']; ?>">Edit</a>
                        </td>
                        <td>
                            <a class="" href="<?php echo 'delete-admin.php?id=' . $row['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php mysqli_free_result($admins); ?>

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
