<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= "public/index.php" . 'styles' . DIRECTORY_SEPARATOR . 'login.css' ?>">
    <link rel="stylesheet" href="<?= "public/index.php" . 'styles' . DIRECTORY_SEPARATOR . 'signup.css' ?>">
    <title>Quizz - Signup</title>
</head>

<body>
    <div class="container">
        <?php require_once PATH_VIEWS. 'includes' . DIRECTORY_SEPARATOR . 'container-header.inc.html.php'; ?>
        <div class="form-modal">
            <div class="form-part">
                <div class="form-modal-header">
                    <p><span id="modal-title">S'INSCRIRE</span><br>
                        <span id="modal-subtitle">Pour tester votre niveau de culture générale</span>
                    </p>
                </div>
                <div class="separator"></div>
                <div class="form-wrapper">
                    <form action="<?= WEB_ROOT ?>" method="post">
                    <input type="hidden" name="controller" value="securite">
                    <input type="hidden" name="action" value="login">

                    
                        <div class="form-control">
                            <label for="first-name">Prénoms</label>
                            <input type="text" name="firstName" id="first-name" placeholder="Prénoms">
                        </div>
                        <div class="form-control">
                            <label for="last-name">Nom</label>
                            <input type="text" name="LastName" id="last-name" placeholder="Nom">
                        </div>
                        <div class="form-control">
                            <label for="email">Login</label>
                            <input type="text" name="email" id="email" placeholder="Login">
                        </div>
                        <div class="form-control">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-control">
                            <label for="password-confirm">Confirmer le mot de passe</label>
                            <input type="password" name="passwordConfirm" id="password-confirm" placeholder="Confirmer le mot de passe">
                        </div>
                        <div class="form-control avatar-choice">
                            <label for="avatar-choice">Avatar</label>
                            <input type="file" name="avatar-picture" class="btn" id="avatar-choice">
                        </div>
                        <div class="form-control submit">
                            <button type="submit" class="btn">Créer un compte</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="avatar-display">
                <img src="<?= "public/index.php".'images' . DIRECTORY_SEPARATOR . 'avatar-img.png' ?>" alt="" class="avatar">
                <p>Avatar du joueur</p>
            </div>
        </div>
    </div>
</body>

</html>