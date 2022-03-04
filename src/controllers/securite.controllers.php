<?php
require_once PATH_SRC . 'models' . DIRECTORY_SEPARATOR . 'user.model.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_REQUEST['action'])) {

        if ($_REQUEST['action'] === "login") {
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            connexion($email, $password);

        }

        if ($_REQUEST['action'] === "signup") {
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            $firstName=$_POST['firstName'];
            $lastName=$_POST['lastName'];
            $passwordConfirm=$_POST['passwordConfirm'];
           signin_user($email, $password,$firstName,$lastName,$passwordConfirm);
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

function signin_user(string $email, string $password,string $firstName,string $lastName,string $password_confirm): void
{
 
    $firstNameError='';
    $lastNameError='';
    $password_confirmError='';
    $emailError = "";
    $passwordError = "";
    check_email($email, $emailError);
    if ($emailError!= "") {
        echo $emailError;
    }
    check_password($password, $passwordError);
    if ($passwordError!= "") {
        echo $passwordError;
    }
    champ_oblig($firstName, $firstNameError);
    if ($firstNameError!= "") {
        echo $firstNameError;
    }
    champ_oblig($lastName, $lastNameError);
    if ($firstNameError!= "") {
        echo $lastNameError;
    }
     champ_oblig($password_confirm, $password_confirmError);
    if ($password_confirmError!= "") {
        echo $password_confirmError;
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

function connexion(string $login,string $password):void {
    $errors=[];
    champ_oblig("login",$login,$errors);
    if(!isset($errors['login'])){
        check_email("login",$login,$errors);
    }
    champ_oblig("password",$password,$errors);
    if(!isset($errors['login'])){
        check_password("password",$password,$errors);
    }

    
    header("location:".WEB_ROOT."?controller=user&action=accueil");
    exit();
    
    if(count($errors)==0){
        $userConnect=find_user_credentials($login,$password);
        if(count($userConnect)!=0){
            $_SESSION[USER_KEY]=$userConnect;
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            exit();
        }else{
            $errors['connexion']="Login ou Mot de passe incorrect";
            $_SESSION['errors']=$errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }else{
        $_SESSION['errors']=$errors;
        header("location:".WEB_ROOT);
        exit();
    }
}



