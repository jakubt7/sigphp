<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <?php include('./header.php') ?>
    </head>
<body>
 <!-- Header  -->   
 <header>
    <?php include('./nav.php') ?>
</header>
    <main>
    <?php include('./spinner.php') ?>
        <div class="loginbox">
            <img src="./images/chef.png" class = "loginphoto">
            <form>
                <label for="Login">Login</label>
                <input type = "text" id = "login" name = "login" placeholder = "Podaj login">
                <label for="Password">Password</label>
                <input type = "text" id = "password" name = "haslo" placeholder = "Podaj hasło">
                <input type = "submit" name = "submit">
                <a href="#" class = "Recovery">Zapomniałeś hasła?</a><br>
                <a href="./register.php" class = "Register">Nie masz konta?</a>
            </form>
        </div>
        <?php include('./arrowUp.php') ?>
    </main>
        <?php include('./footer.php') ?>
        <script type="module" src = "./index.js"></script>
</body>

</html>