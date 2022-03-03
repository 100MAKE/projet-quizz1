<?php

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) {
            case "connexion":
                require_once PATH_VIEWS . 'securite' . DIRECTORY_SEPARATOR . 'connexion.html.php';     
                break;
            }
        } else {
        require_once PATH_VIEWS . 'securite' . DIRECTORY_SEPARATOR . 'connexion.html.php';     
        exit();
    }
}
 





echo " mont";
function connexion(string $login,string $password):void {
    $errors=[];
    champ_obligatoire("login",$login,$errors);
    if(!isset($errors['login'])){
        valid_email("login",$login,$errors);
    }
    champ_obligatoire("password",$password,$errors);
    if(!isset($errors['login'])){
        valid_password("password",$password,$errors);
    }
    if(count($errors)==0){
        $userConnect=find_user_login_password($login,$password);
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
function logout():void{
    $_SESSION['user_connect']=array();
    unset($_SESSION['user_connect']);
    session_destroy();
    header("location:".WEB_ROOT);
    exit();}