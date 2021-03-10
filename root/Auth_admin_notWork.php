<?php
include ('../DB/DB_Connector.php');
class Auth_admin {
    public function authAdmin($login,$password){
        $db=new DB_Connector();
        if (isset($_POST['submit'])){
        $query="select * from users u where username='$login' and password_='$password';";
        $ress=$db->getQueryConstruct($query);
        $this->res=mysqli_fetch_assoc($ress);

        if ($this->res['password_']===$_POST['password']){
        $hash=md5($this->generateCode(10));
        mysqli_query($db->getLink(),"update users set user_hash='".$hash."' where id='".$this->res['id']."' ");
        setcookie("id",$this->res['id'],time()+60*60*24*30);
        setcookie("hash",$hash,time()+60*60*24*30);
        header("Location: Check_Auth.php");exit();
        }else{
            echo "неправильный логин или пароль";
        }



        }
    }

    function generateCode($length=6){
        $words="abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
        $code="";
        $clen= strlen($words)-1;
        while (strlen($code)<$length){
            $code.=$words[mt_rand(0,$clen)];
        }
        return $code;
    }

}
$auth=new Auth_admin();
$auth->authAdmin($_POST['login'],$_POST['password']);
?>

