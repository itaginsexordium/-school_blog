<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/news/css/index.css">
    <?php
    include "DB/DB_Connector.php";
    include "DB/InfoFromBase.php";
    ?>
    <style>

    </style>
</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__logo">
            <!-- logo -->

        </div>
        <nav class="header__navbar">
            <!-- navbar -->
            <ul class="header__list">
                <li class="header__item">
                    <a href="index.php" class="header__link">главная</a>
                </li>
                <li class="header__item">
                    <a href="News.php" class="header__link">новости</a>
                </li>
                <li class="header__item">
                    <a href="#" class="header__link">документация</a>
                </li>
            </ul>
        </nav>
        <div class="header__burger">
            <!-- burger -->
            <span></span>
        </div>
        <div class="header__popup"></div> <!-- popup -->
    </div>
</header>
<main>
    <div class="container">

        <?php
        $news=new indexInfo();
        $news->newsTable();
        ?>

    </div>
</main>

<script src="style/news/js/app.js"> </script>

</body>

</html>