<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="register-login-box">
    <form method="POST">
        <label class="register-login-label">
            Email:
            <input type="email" name='email' value="<?=($_POST["email"] ?? "")?>"/>
            <?php if (isset($errors["email"])) { ?> 
                <p class="invalid-data"><?= $errors["email"] ?></p>
            <?php } ?>
        </label>
        <label>
            Password:
            <input type="password" name='password' value="<?=($_POST["password"] ?? "")?>"/>
            <?php if (isset($errors["password"])) { ?> 
                <p class="invalid-data"><?= $errors["password"] ?></p>
            <?php } ?>
        </label>
        <button class="add-edit-button">Login</button>
    </form>
    <a href="/register">Reģistrēt profilu</a>
</div>

<?php if (isset($_SESSION["flash"])) { ?>
    <p class="flash"><?= $_SESSION["flash"] ?></p>
    <?php ?>
<?php } ?>

<?php require "views/components/footer.php" ?>