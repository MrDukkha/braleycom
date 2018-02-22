<?php

function hsc($string="") {
    return htmlspecialchars($string);
}

function is_valid_email($email) {
    $pattern = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    return preg_match($pattern, $email) === 1;
}

function show_errors($errors = array()) {
    $display = '';
    if(!empty($errors)) {
        $display = "<div class=\"errors\">";
        $display .= "The following errors need to be fixed";
        $display .= "<ul>";
        foreach($error in $errors) {
            $display .= "<li>" . hsc($error) . "</li>";
        }
        $display .= "</ul>";
        $display .= "</div>";
    }
    return $display;
}

?>