<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/indexPg/css/index.css">
    <title>Document</title>
    <?php
    include ("DB/DB_Connector.php");
    include "DB/InfoFromBase.php";
    ?>
</head>

<body>
<?php
require ('./forms/header.php');
require ('./controler.php');
require ('./forms/footer.php');
?>



<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="./style/indexPg/js/script.js"></script>
<script src="./style/indexPg/js/slick.min.js"></script>
<script src="./style/indexPg/js/app.js"></script>

</body>

</html>