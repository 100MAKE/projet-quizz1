<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= WEB_ROOT . 'styles' . DIRECTORY_SEPARATOR . 'login.css' ?>">
    <link rel="stylesheet" href="<?= WEB_ROOT. 'styles' . DIRECTORY_SEPARATOR . 'home.css' ?>">
    <link rel="stylesheet" href="<?= WEB_ROOT. 'styles' . DIRECTORY_SEPARATOR . 'sign.css' ?>">

    <title>Quizz - Home</title>
</head>

<body>
    <div class="container">
        <?php require_once PATH_VIEWS. 'includes' . DIRECTORY_SEPARATOR . 'container-header.inc.html.php'; ?>
        <div class="admin-dashboard">
            <div class="admin-dashboard-header">
                <h2>CRÉEZ ET PARAMÉTREZ VOS QUIZZ</h2>
                <button class="btn">Déconnexion</button>
            </div>
            <div class="admin-profile">
                <div class="admin-infos">
                    <img src="<?= WEB_ROOT . 'images' . DIRECTORY_SEPARATOR . 'avatar-img.jpeg' ?>" alt="avatar" class="avatar">
                    <div class="name-display">
                        <p id="first-name">Admin</p>
                        <p id="last-name">Admin</p>
                    </div>
                </div>
                <div class="admin-menu">
                    <ul>
                        <li>
                            <span>Liste des questions</span>
                            <img src="<?=WEB_ROOT. 'images' . DIRECTORY_SEPARATOR . 'icons' . DIRECTORY_SEPARATOR . 'ic-liste.png' ?>" alt="">
                        </li>
                        <li>
                            <span>Créer un admin</span>
                            <img src="<?= WEB_ROOT. 'images' . DIRECTORY_SEPARATOR . 'icons' . DIRECTORY_SEPARATOR . 'ic-ajout.png' ?>" alt="">
                        </li>
                        <li>
                            <span>Liste des joueurs</span>
                            <img src="<?= WEB_ROOT. 'images' . DIRECTORY_SEPARATOR . 'icons' . DIRECTORY_SEPARATOR . 'ic-liste-active.png' ?>" alt="">
                        </li>
                        <li>
                            <span>Créer une question</span>
                            <img src="<?= WEB_ROOT . 'images' . DIRECTORY_SEPARATOR . 'icons' . DIRECTORY_SEPARATOR . 'ic-ajout.png' ?>" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="player-list">
                <h3>Liste des joueurs par score</h3>
                <table>
                    <thead>
                        <tr>
                            <td>Nom</td>
                            <td>Prénom</td>
                            <td>Score</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (get_users() as $user) : ?>
                            <?php if ($user['role'] == "ROLE_PLAYER") : ?>
                                <tr>
                                    <td><?= $user['name'] ?></td>
                                    <td><?= $user['surname'] ?></td>
                                    <td><?= $user['score'] ?></td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <button class="btn" id="next-btn">Suivant</button>
            </div>
        </div>
    </div>
</body>

</html>