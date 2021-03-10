<?php
include ('../DB/DB_Connector.php');
class Check_Auth{
    function Check(){
        $db=new DB_Connector();
        if (isset($_COOKIE['id'])and isset($_COOKIE['hash'])){
            $query="select * from users WHERE  id='".intval($_COOKIE['id'])."'limit 1";
            $res=$db->getQueryConstruct($query);
        $userData=mysqli_fetch_assoc($res);
            if(($userData['user_hash'] !== $_COOKIE['hash']) ||
                ($userData['id'] !== $_COOKIE['id'])){
                setcookie("id", "", time() - 3600*24*30*12);
                setcookie("hash", "", time() - 3600*24*30*12);
                echo "Хм, что-то не получилось";
            }else{
                header("location: admin.php");
            }
        }else{
            echo "Включите КУКИ";
        }
    }
}
$s=new Check_Auth();
$s->Check();
?>


