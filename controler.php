<?php
if (isset($_GET['page'])){
    $page=htmlentities($_GET['page']);
    $path="./elements/$page.php";
    if (file_exists($path)){
        include ($path);
    }else{
        header('location: ./');}
    }else{
    include ('./elements/main.php');
}
?>