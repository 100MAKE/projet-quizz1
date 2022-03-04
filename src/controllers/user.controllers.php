
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
            case "accueil":
                require_once PATH_VIEWS . 'securite' . DIRECTORY_SEPARATOR . 'home.admin.html.php';
                break;

            case "signup":
                require_once PATH_VIEWS . 'user' . DIRECTORY_SEPARATOR . 'signup.html.php';
                break;
            
            case "deconnexion":
                deconnexion();
                break;
           
            
        }
    } else {
        header('location:'.WEB_ROOT);
        exit();
    }
}

function deconnexion()
{
    session_destroy();
  // require_once PATH_VIEWS . 'securite' . DIRECTORY_SEPARATOR . 'login.html.php';
    header('location: ' . WEB_ROOT);
    exit();
}