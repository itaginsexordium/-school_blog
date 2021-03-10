<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="../style/rootPg/adminPg/css/index.css">
</head>

<body>
<header class="header">
    <div class="container">
        <div class="header__logo">
            <!-- logo -->
            <img src="../style/rootPg/adminPg/img/logo.svg" alt="logo">
        </div>
        <div class="header__burger">
            <!-- burger -->
            <span></span>
        </div>
        <div class="header__popup"></div> <!-- popup -->
    </div>
</header>

<div class="cards ">
    <a href="newsElement.php">
        <div class="card" id="timetable">
            <div class="card_element" id="card_title">
                <p>Новости</p>
            </div>
            <div class="card_element" id="card_content">
                Здесь должен быть текст!
            </div>
            <div class="card_element" id="card_button">
                <p>Добавить новость</p>
            </div>
        </div>
    </a>
    <a href="teachersElements.php">
        <div class="card" id="timetable">
            <div class="card_element" id="card_title">
                <p>Учителя</p>
            </div>
            <div class="card_element" id="card_content">
                Список учителей
            </div>
            <div class="card_element" id="card_button">
                <p>Изменить расписание</p>
            </div>
        </div>
    </a>
</div>
</body>

</html>