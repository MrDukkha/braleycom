<?php 

require_once('includes/initialize.php');
$errors = [];
$username = '';
$password = '';

if(isset($_POST['submit'])) {
    $username = $_POST['username'] ? true : '';
    $password = $_POST['password'] ? true : '';

    if(!isset($username) || trim($username)) {
        errors[] = "Please ener a username"; 
    }
    if(!isset($password) || trim($password)) {
        errors[] = "Please ener a password"; 
    }

    if(empty($errors)) {
        $error = "Could not login please contact and administrator.";

        $user = find_by_username($username);

        if($user) {
            if(password_verify($password, $user['hashed_pass'])) {
                user_login($user);
                header("Location: index.php");
            }
        } else {
            // Display errors
            
        }
    }
    
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
    <link rel="stylesheet" href="css\styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   

  </head>
  <body>
      
    <div class="container">
    <h1>Login Form</h1><hr>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password">
            </div>
            
            <button type="submit" class="btn btn-default" name="submit">Submit</button>
        </form>
    </div> <!-- /container -->

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
