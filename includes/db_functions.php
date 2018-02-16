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
?>