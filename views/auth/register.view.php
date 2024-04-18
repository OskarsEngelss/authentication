<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="register-login-box">
    <form method="POST">
        <label>
            Email:
            <input type="email" name='email' value="<?=($_POST["email"] ?? "")?>"/>
            <?php if(isset($errors["email"])) { ?> 
                <p class="invalid-data"><?= $errors["email"] ?></p>
            <?php } ?>
        </label>
        <label>
            Password:
            <input type="password" name='password' value="<?=($_POST["password"] ?? "")?>"/>
            <span class="explanation">(jābūt 8 rakstzīmēm, 1 burtam, 1 lielam, 1 mazam un 1 īpašam simbolam.)</span>
            <?php if(isset($errors["password"])) { ?> 
                <p class="invalid-data"><?= $errors["password"] ?></p>
            <?php } ?>
        </label>
        <button class="add-edit-button">Register</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>