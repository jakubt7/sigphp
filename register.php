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
        <div class="registerbox">
            <img src="./images/chef.png" class = "loginphoto">
            <form>
                <label for="Login">Login</label>
                <input type = "text" id = "regname" name = "regname" placeholder = "Podaj login">
                <label for="Password">Phone number</label>
                <input type = "text" id = "regnr" name = "regnr" placeholder = "Podaj numer telefonu">
                <label for="Email">E-mail</label>
                <input type = "text" id = "email" name = "email" placeholder = "Podaj email">
                <label for="Password">Password</label>
                <input type = "text" id = "regpas"name = "regpas" placeholder = "Podaj hasło">
                <input type = "submit" name = "submit">
                <a href="./userlogin.php" class = "Login">Zaloguj się</a>
            </form>
        </div>
        <?php include('./arrowUp.php') ?>
    </main>
        <?php include('./footer.php') ?>
        <script type="module" src = "./index.js"></script>
</body>

</html>