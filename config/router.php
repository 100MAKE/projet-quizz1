<?php
// var_dump($_REQUEST['controller']);die;  
if (isset($_REQUEST['controller'])) {
    switch ($_REQUEST['controller']) {
           
        case 'user':
        require_once(PATH_SRC."controllers".DIRECTORY_SEPARATOR."user.controllers.php");
          break;

        case 'securite':
            require_once(PATH_SRC."controllers". DIRECTORY_SEPARATOR ."securite.controllers.php");
            break;

    }
} else {
    require_once(PATH_SRC ."controllers". DIRECTORY_SEPARATOR."securite.controllers.php");
}