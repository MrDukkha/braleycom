<?php 

function user_login($user) {
    session_regenerate_id();

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    return true;
}

function user_logout() {
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    return true;
}

function logged_in() {
    return isset($_SESSION['user_id']);
}




?>