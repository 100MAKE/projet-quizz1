<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= WEB_ROOT. 'styles' . DIRECTORY_SEPARATOR . 'login.css' ?>">
    <title>Quizz - Signin</title>
</head>

<body>
    <div class="container">
        <?php require_once PATH_VIEWS . 'includes' . DIRECTORY_SEPARATOR .'container-header.inc.html.php'; ?>
        <div class="modal-container">
            <div class="modal-header">
                <h3>Login</h3>
            </div>
            <div class="modal-form-wrapper">
                <form action="" method="post">
                    <input type="hidden" name="controller" value="securite">
                    <input type="hidden" name="action" value="login">
                    <div class="form-control">
                        <input type="text" name="email" placeholder="Login">
                        <small class="hidden" id="email-error-msg"></small>
                    </div>
                    <div class="form-control">
                        <input type="password" name="password" placeholder="Password">
                        <small class="hidden" id="password-error-msg"></small>
                    </div>
                    <div class="form-control submit">
                        <button type="submit" class="btn">Connexion</button>
                        <p><a href="<?= WEB_ROOT.'?controller=user&action=signup' ?>">S'inscrire pour jouer?</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <script src="<?= ROOT. 'scripts' . DIRECTORY_SEPARATOR . 'script.js' ?>"></script> -->
    <script src="<?= WEB_ROOT.'scripts'.DIRECTORY_SEPARATOR . 'script.js' ?>"></script>

</body>

</html>