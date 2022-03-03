<?php
require_once PATH_SRC . 'models' . DIRECTORY_SEPARATOR . 'user.model.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_REQUEST['action'])) {
        if ($_REQUEST['action'] === "login") {
            // die("hello");
            $email = $_POST['email'];
            $password = $_POST['password'];
            signin_user($email, $password);
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) {
            case 'login':
                require_once PATH_VIEWS. 'securite' . DIRECTORY_SEPARATOR . 'login.html.php';
                break;

            case 'home':
            
             require_once PATH_VIEWS. 'securite' . DIRECTORY_SEPARATOR .'home.admin.html.php';
        
                
                break;
            default:
                require_once PATH_VIEWS. 'securite' . DIRECTORY_SEPARATOR . 'login.html.php';
                break;
        }
    } else {
        require_once PATH_VIEWS . 'securite' . DIRECTORY_SEPARATOR . 'login.html.php';
    }
}

function signin_user(string $email, string $password): void
{
 
    $emailError = "";
    $passwordError = "";
    check_email($email, $emailError);
    if ($emailError != "") {
        echo $emailError;
    }
    check_password($password, $passwordError);
    if ($passwordError != "") {
        echo $passwordError;
    }
    if ($emailError == "" && $passwordError == "") {
        $user = find_user_credentials($email, $password);
        
        if (count($user) != 0) {
            $_SESSION['current_user'] = $user;
            header('location: ' . WEB_ROOT . '?controller=securite&action=home');
            exit();
        } else {
            $errors['user_error'] = "Email ou mot de passe incorrect";
            $_SESSION['errors'] = $errors;
            header('location:' . WEB_ROOT);
            exit();
        }
    } else {
        $errors = array('email_error' => $emailError, 'password_error' => $passwordError);
        $_SESSION['error'] = $errors;
        header('location:' . WEB_ROOT);
        exit();
    }
}

function logout()
{
    session_destroy();
    session_unset($_SESSION['current_user']);
    session_unset($_SESSION['errors']);
    header('location: ' . WEB_ROOT);
    exit();
}