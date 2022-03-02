<?php function connexion(string $login,string $password):void {
$errors=[];
champ_obligatoire("login",$login,$errors);
if(!isset($errors['login'])){
valid_email("login",$login,$errors);
}
champ_obligatoire("password",$password,$errors);
if(!isset($errors['login'])){
valid_password("password",$password,$errors);
}
// if(count($errors)==0){
// // $userConnect=find_user_login_password($login,$password);
// if(count($userConnect)!=0){
// $_SESSION[USER_KEY]=$userConnect;
// header("location:".WEBROOT."?controller=user&action=accueil");
// exit();
// }else{
// $errors['connexion']="Login ou Mot de passe incorrect";
// $_SESSION['errors']=$errors;
// header("location:".WEBROOT);
// exit();
// }
// }else{
// $_SESSION['errors']=$errors;
// header("location:".WEBROOT);
// exit();
// }
//}
function logout():void{
$_SESSION['user_connect']=array();
unset($_SESSION['user_connect']);
session_destroy();
header("location:".WEBROOT);
exit();
}
if($_SERVER['REQUEST_METHOD']=="POST"){
if(isset($_POST['action'])){
}
}
if($_SERVER['REQUEST_METHOD']=="GET"){
if(isset($_GET['action'])){
}
}