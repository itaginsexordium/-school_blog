<?php
class adminPanelInfo{


    private  $table;

    /**
     * adminPanelInfo constructor.
     * @param $table
     */
    public function __construct($table)
    {
        $this->table = $table;
    }
    ///admin panel fun info
    ///
    ///

    public function tableInformation()
    {
        $BD = new DB_Connector();
        $query = "select * from $this->table";
        $this->res=$BD->getQueryConstruct($query);
        if ($this->res->num_rows>0){
            while ($row=$this->res->fetch_assoc()){
                echo "
             <div class=\"news\">
            <div class=\"news__box collapsible\">
                <div class=\"news__title\">".$row['titleNews']."</div>
                <div class=\"btn__wrapper\">
                    <img src=\"./img/trianlge.svg\" alt=\"\" class=\"btn__collapse\">
                </div>
            </div>
            <div class=\"content\">
                <div class=\"news__box-open\">
                    <img src=\"../".$row['URI_pick']."\" alt=\"News img\" class=\"news__img\">
                    <div class=\"news__content\">
                        <div class=\"news__text\">
                        ".$row['textNews']."</div>
                        <div class=\"btn__wrapper\">
                       
                       
                       
                        <form method='post'>
                        <input type='submit' class=\"btn__remove\" name='deletElementById' value='редактировать'>
                        </form>
                        
                     
                           <form method='post' action=''>
                        <input type='hidden' name='id' value=".$row['id'].">
                        <input type='submit' class=\"btn__remove\" name='deletElementById' value='Удалить'>
                        </form>
                        
                        
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
        }
    }


    public function deleteElementById($id){
        if (isset($_POST['deletElementById'])){
        $DB=new DB_Connector();
        $query="delete from $this->table where id=$id;";
        mysqli_query( $DB->getLink(),$query);
            $this->res="успешно удалено под номером $id";
            echo "<script>
alert(\"удалена $id\");
</script>";
            return $this->res;
    }
    }



    public function updateElementById($id){
        $DB=new DB_Connector();
        if ($this->table=="news_") {
            $query="Update ";
        }else if ($this->table=="teachers"){
            $query="";
        }
        mysqli_query( $DB->getLink(),$query);
        $this->res="успешно удалено под номером $id";
        return $this->res;
    }




}