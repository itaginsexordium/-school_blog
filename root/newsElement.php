<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/rootPg/EditPg/css/index.css">
    <style>
    </style>
</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__logo">
            <!-- logo -->
            <img src="../img/logo.jpg" alt="logo">
        </div>
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
        include ("../DB/DB_Connector.php");
        include "../DB/adminPanelInfo.php";
        $info=new adminPanelInfo("news_");
        $info->tableInformation();
        $info->deleteElementById($_POST['id'])
        ?>
    </div>
</main>

<script src="../style/rootPg/EditPg/js/app.js"> </script>

</body>

</html>