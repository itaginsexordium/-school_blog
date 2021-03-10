<?php
Class indexInfo{
    protected $servername;
    protected $username;
    protected $password;
    protected $database;
    protected $link;




    protected $query;
    protected $res;







    public function  sliderInfo(){
        $BD=new DB_Connector();
        $this->query="select * from  news_ n  limit 5";
        $this->res=$BD->getQueryConstruct($this->query);
        if ($this->res->num_rows>0){
            while ($row=$this->res->fetch_assoc()){
                echo  "
                <div class=\"news_content\">
                <div class=\"news__left\">    
                    <img src=./".$row["URI_pick"]." alt=\"\" class=\"news__img\">
                </div>
                <div class=\"news__right\">
                    <div class=\"news__content\">
                        <h2>".$row["titleNews"]."</h2>
                        <p>".$row["textNews"]."</p>
          
                    </div>
                </div>
            </div>";
            }
        }
    }





    public function  teachersSliderInfo(){
        $BD=new DB_Connector();
        $this->query="select * from  teachers ";
        $this->res=$BD->getQueryConstruct($this->query);
        if ($this->res->num_rows>0){
            while ($row=$this->res->fetch_assoc()){







                echo "
     <div class=\"teachers__card\">
                    <img SRC=\"./".$row['URI_photo']."\" alt=\"\">
                    <div class=\"teachers__content\">
                        <div class=\"teachers__subtitle\">".$row['name_']."</div>
                        <div class=\"teachers__text\">".$row['subjekt']."</div>
                    </div>
                    </div>";
            }
        }
    }



///News Info plates
///
///

    public function newsTable()
    {
        $BD = new DB_Connector();
        $query = "select * from news_";
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
                    <img src=\"./".$row['URI_pick']."\" alt=\"News img\" class=\"news__img\">
                    <div class=\"news__content\">
                        <div class=\"news__text\">
                        ".$row['textNews']."</div>
                        <div class=\"btn__wrapper\">
                       
                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
        }
    }
}
?>