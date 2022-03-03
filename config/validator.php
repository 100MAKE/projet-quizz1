<?php
function champ_obligatoire(string $key,string $data,array &$errors,string
$message="ce champ est obligatoire"){
if(empty($data)){
$errors[$key]=$message;
}
}
function valid_email(string $key,string $data,array &$errors,string $message="email
invalid"){
if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
$errors[$key]=$message;
}
}function valid_password(string $key,string $data,array &$errors,string
$message="password invalid"){
}
// <?php
// function check_email(string $value, string &$error)
// {
//     if (empty($value)) {
//         $error = "Email obligatoire";
//     } else {
//         if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
//             $error = "Email invalide";
//         }
//     }
// }

// function check_password(string $value, string $error)
// {
//     if (empty($value)) {
//         $error = "Password incorrect";
//     }
// }