<?php
require_once(PATH_VIEWS."include/header.html.php");
if(isset($_SESSION['errors'])){
$errors=$_SESSION['errors'];unset($_SESSION['errors']);
}
?>
<img class="wave" src="<?=WEBROOT."img/wave.png"?>">
<div class="container">
<div class="img">
<img src="<?=WEBROOT."img/login form.svg"?>">
</div>
<div class="login-content">
<form action="<?=PATH_POST?>" method="post">
<input type="hidden" name="controller" value="securite">
<input type="hidden" name="action" value="connexion">
<img src="img/avatar.svg">
<h2 class="title">QUIZZ SA</h2>
<?php if(isset($errors['connexion'])):?>
<span style="color:red;
font-size:13px"><?=$errors['connexion']?></span>
<?php endif ?>
<div class="input-div one">
<div class="i">
<i class="fas fa-user"></i>
</div>
<div class="div">
<h5>Username</h5>
<input type="text" name="login" class="input">
</div>
</div>
<div>
<?php if(isset($errors['login'])):?>
<span style="color:red;margin-left:-200px;
font-size:13px"><?=$errors['login']?></span>
<?php endif ?>
</div>
<div class="input-div pass">
<div class="i">
<i class="fas fa-lock"></i>
</div>
<div class="div">
<h5>Password</h5>
<input type="password" name="password" class="input">
</div>
</div><?php if(isset($errors['password'])):?>
<span style="color:red;margin-left:-200px;
font-size:13px"><?=$errors['password']?></span>
<?php endif ?>
<button type="submit" class="btn" name="action"
value="connexion">Connexion</button>
</form>
</div>
</div>
<?php
require_once(PATH_VIEWS."include/footer.html.php");
?>