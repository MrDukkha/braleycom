<?php

function hsc($string="") {
    return htmlspecialchars($string);
}

function is_valid_email($email) {
    $pattern = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
    return preg_match($pattern, $email) === 1;
}

function get_errors($errors = array()) {
    $display = '';
    if(!empty($errors)) {
        $display = "<div class=\"errors\">";
        $display .= "The following errors need to be fixed";
        $display .= "<ul>";
        foreach($errors as $error) {
            $display .= "<li>" . hsc($error) . "</li>";
        }
        $display .= "</ul>";
        $display .= "</div>";
    }
    return $display;
}

function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
  }

  function redirect_to($location) {
    header("Location: " . $location);
    exit;
  }
  

?>