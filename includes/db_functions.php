<?php

function get_all_posts() {
    global $db;

    $sql = "SELECT * FROM blog_posts ";
    $sql .= "ORDER BY postDate DESC";

    $result = mysqli_query($db, $sql);

    return $result;
}


function get_post_by_id($id) {
    global $db;

    $sql = "SELECT * FROM blog_posts ";
    $sql .= "WHERE postID=$id";

    $result = mysqli_query($db, $sql);
    $post = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $post;
}

function get_post_by_author($author) {
    global $db;

    $sql = "SELECT * FROM blog_posts ";
    $sql .= "WHERE author='$author' ";
    $sql .= "ORDER BY postDate DESC";

    $result = mysqli_query($db, $sql);
    
    return $result;
}


function update_post($title, $description, $content, $id) {
    global $db;

    $sql = "UPDATE blog_posts SET ";
    $sql .= "postTitle='$title', ";
    $sql .= "postDesc='$description', ";
    $sql .= "postCont='$content' ";
    $sql .= "WHERE postID='$id'";

    $result = mysqli_query($db, $sql);
    if($result == true) {
        header("Location: ../index.php");
    }
}

function insert_post($title, $author, $description, $content){
    global $db;

    $sql = "INSERT INTO blog_posts ";
    $sql .= "(postTitle, author, postDesc, postCont, postDate) ";
    $sql .= "VALUES('$title', '$author', '$description', '$content', NOW())";

    $result = mysqli_query($db, $sql);

    if($result == true) {
    header("Location: ../index.php");
    }
}

function delete_post($id) {
    global $db;
    
    $sql = "DELETE FROM blog_posts ";
    $sql .= "WHERE postID=$id ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    if($result == true) {
        header("Location: index.php");
    }
}
/* Admin Functions */

function get_users() {
    global $db;

    $sql = "SELECT * FROM admin ";
    $sql .= "ORDER BY lastName ASC, firstName ASC";

    $result = mysqli_query($db, $sql);

    return $result;
}

function find_by_username($username) {
    global $db;

    $sql = "SELECT * FROM admin ";
    $sql .= "WHERE username='$username' ";
    $sql .= "LIMIT 1";
    

    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($user);

    return $user;
}

function insert_user($fName, $lName, $email, $username, $pass, $is_admin) {
    global $db;

    $hashed_pass = password_hash("$pass", PASSWORD_BCRYPT);

    $sql = "INSERT INTO admin ";
    $sql .= "(firstName, lastName, email, username, hashed_pass, is_admin) ";
    $sql .= "VALUES ('$fName', '$lName', '$email', '$username', '$hashed_pass', $is_admin)";

    $result = mysqli_query($db, $sql);

    if($result == true) {
    header("Location: index.php");
    }
}

function find_user_by_id($id) {
    global $db;

    $sql = "SELECT * FROM admin ";
    $sql .= "WHERE id = $id ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $user;
}

function update_user($fName, $lName, $email, $username, $pass, $is_admin, $id) {
    global $db;

    $new_pass = isset($pass);
    $hashed_pass = password_hash("$pass", PASSWORD_BCRYPT);

    $sql = "UPDATE admin SET ";
    $sql .= "firstName='$fName', ";
    $sql .= "lastName='$lName', ";
    $sql .= "email='$email', ";
    $sql .= "username='$username', ";
    
        $sql .= "hashed_pass='$hashed_pass', ";
    
    $sql .= "is_admin='$is_admin' ";
    $sql .= "WHERE id='$id' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    if($result){
        return true;
    } else {
        echo mysqli_error($db);
    }
}

function is_admin($id) {
    global $db;

    $result = find_user_by_id($id);
    if($result['is_admin'] == 1) {
        return true;
    }
}


?>