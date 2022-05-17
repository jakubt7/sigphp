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
<!-- POLECAMY -->
<div class="reccomend">
     <h3>&#10071; POLECAMY &#10071;</h3> 
</div>

<?php include('./spinner.php') ?>

<!-- Slider -->

<?php include('./slidershow.php') ?>

<!-- Restaurants list-->

<div class = "restauracje">
    <div class = "restauracja1">
        <div class = "zdjecieres">
            <img src="./images/burger.png" alt="">
        </div>
        <div class = "opis">
            <p class="title">McDonalds</p>
            <p class="desc">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nulla, placeat asperiores id repudiandae rerum? Illo, nisi incidunt. Expedita quas consectetur facere magnam magni repudiandae non dolorum earum mollitia enim?

            </p>
            <a href="./mcdolec.php" class="button">Zamów!</a>
        </div>
    </div>
    <div class = "restauracja1">
        <div class = "zdjecieres">
            <img src="./images/frytki.jfif" alt="">
        </div>
        <div class = "opis">
            <p class="title">KFC</p>
            <p class="desc">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nulla, placeat asperiores id repudiandae rerum? Illo, nisi incidunt. Expedita quas consectetur facere magnam magni repudiandae non dolorum earum mollitia enim?

            </p>
            <p class="button">Zamów!</p>
            
        </div>   
    </div>
    <div class = "restauracja1">
        <div class = "zdjecieres">
            <img src="./images/kebab-02.jpg" alt="">
        </div> 
        <div class = "opis">
            <p class="title">Burger King</p>
            <p class="desc">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nulla, placeat asperiores id repudiandae rerum? Illo, nisi incidunt. Expedita quas consectetur facere magnam magni repudiandae non dolorum earum mollitia enim?

            </p>
            <p class="button">Zamów!</p>
            
        </div>    
    </div>
    <div class = "restauracja1">
        <div class = "zdjecieres">
            <img src="./images/pierogi.jpg" alt="">
        </div>  
        <div class = "opis">
            <p class="title">Kebab</p>
            <p class="desc">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nulla, placeat asperiores id repudiandae rerum? Illo, nisi incidunt. Expedita quas consectetur facere magnam magni repudiandae non dolorum earum mollitia enim?

            </p>
            <p class="button">Zamów!</p>
            
        </div>
    </div>
    <div class = "restauracja1">
        <div class = "zdjecieres">
            <img src="./images/zupa.jpg" alt="">
        </div>
        <div class = "opis">
            <p class="title">Polsat Cafe</p>
            <p class="desc">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nulla, placeat asperiores id repudiandae rerum? Illo, nisi incidunt. Expedita quas consectetur facere magnam magni repudiandae non dolorum earum mollitia enim?

            </p>
            <p class="button">Zamów!</p>
            
        </div>
    </div>
</div>
<?php include('./arrowUp.php') ?>
</main>

<?php include('./footer.php') ?>

<script type="module" src = "./index.js"></script>
</body>
</html>