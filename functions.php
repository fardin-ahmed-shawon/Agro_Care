<?php
// All the functions related to this project will be defined here


// input sanitization  
function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}


?>