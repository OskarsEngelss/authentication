<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="email-box">
    <h1><?= $_SESSION["email"] ?></h1>
</div>

<div class="button-holder">
    <form method="POST" class="back-circle" action="/logout">
        <button class="back-button">Log out</button>
    </form>
</div>

<?php require "views/components/footer.php" ?>