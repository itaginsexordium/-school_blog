<form method="post" action="teachersElements.php" enctype="multipart/form-data">
    <input type="text" name="name" ><br>
    <input type="text" name="subjekt" ><br>
    <input type="text" name="description" ><br>
    <input type="file" name="file"><br>
    <input type="submit" name="sub" value="загрузить">
</form>
<?php
include ("../DB/DB_Connector.php");
Class  TeachersUpload extends DB_Connector {
    protected  $uploadDir='imgUser/';
    public function uploadTeacher(){
        $uploadFile=$this->uploadDir.$_FILES['file']['name'];

        if (isset($_POST['sub']) and  $_FILES){
            $name=$_REQUEST['name'];
            $subjekt=$_REQUEST['subjekt'];
            $description=$_REQUEST['description'];
            $this->query="insert into teachers (name_,subjekt,description,URI_photo)values( '$name','$subjekt','$description','$uploadFile');";
            if (mysqli_query($this->link,$this->query)){
                move_uploaded_file($_FILES['file']['tmp_name'],'../'.$uploadFile);
                echo  "запись  успешно добавлена";
            }else{
                echo "   ОШИБКА".mysqli_error($this->link);
            }
        }
    }
}

$f= new TeachersUpload("localhost","root","root","church_school");
$f->uploadTeacher();
?>