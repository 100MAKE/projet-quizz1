
<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] === "login") {
            
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) {
            case "login":
                
                break;

            case "signup":
                require_once PATH_VIEWS . 'user' . DIRECTORY_SEPARATOR . 'signup.html.php';
                break;
        }
    } else {
        header('location:'.WEB_ROOT);
        exit();
    }
}