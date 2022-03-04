
<?php
function check_email(string $value, string &$error)
 {
    if (empty($value)) {
        $error = "Email obligatoire";
    } else {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $error = "Email invalide";
        }
     }
}

 function check_password(string $value, string $error) {
    if (empty($value)) {
        $error = "Password incorrect";
    }
 }
 function champ_oblig(string $value,string &$error){
if(empty($value)){
    $error="champs obligatoire";

}



 }
