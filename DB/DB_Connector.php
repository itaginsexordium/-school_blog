<?php
class DB_Connector
{
    protected $servername="localhost";
    protected $username="root";
    protected $password="root";
    protected $database="church_school";
    protected $link;


    protected $query;
    protected $res;


    public function getLink()
    {

        $this->link = mysqli_connect(
            $this->servername,
            $this->username,
            $this->password,
            $this->database
        ) or die ("Ошибка:  " . mysqli_error($this->link));
        return $this->link;
    }

    /**
     * @return mixed
     */
    public function getQueryConstruct($Query)
    {
        $this->res=mysqli_query($this->getLink(),$Query)or die(mysqli_error($this->getLink()));

        return $this->res;
    }

    /**
     * @return mixed
     */
    public function getRes()
    {
        return $this->res;
    }



    public function updateElementById(){

    }
}
?>