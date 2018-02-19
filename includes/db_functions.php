<?php

function get_all_posts() {
    global $db;

    $sql = "SELECT * FROM blog_posts ";
    $sql .= "ORDER BY postDate ASC";

    $result = mysqli_query($db, $sql);

    return $result;
}


function get_post_by_id($id) {
    global $db;

    $sql = "SELECT * FROM blog_posts ";
    $sql .= "WHERE postID = $id";

    $result = mysqli_query($db, $sql);
    $post = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $post;
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
        header("Location: index.php");
    }
}

function insert_post($title, $description, $content){
    global $db;

    $sql = "INSERT INTO blog_posts ";
    $sql .= "(postTitle, postDesc, postCont, postDate) ";
    $sql .= "VALUES('$title', '$description', '$content', NOW())";

    $result = mysqli_query($db, $sql);

    if($result == true) {
    header("Location: index.php");
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

function get_admins() {
    global $db;

    $sql = "SELECT * FROM admin ";
    $sql .= "ORDER BY lastName ASC, firstName ASC";

    $result = mysqli_query($db, $sql);

    return $result;
}

function find_by_username($username) {
    global $db;

    $sql = "SELECT * FROM admin ";
    $sql .= "WHERE username='$username'";
    

    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($user);
    return $user;
}


?>