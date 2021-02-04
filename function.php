<?php
include_once 'dbcon.php';
class test extends dbcon{
    public $conn;
    public function __construct()
    {
        $dbcon=new dbcon();
        $this->conn=$dbcon->createConnection();
    }

    public function signup($email,$name,$number,$password){
        $sql = "INSERT INTO info ( name,password,email,number)
        VALUES ('$name','$password','$email',$number)";
        $data=$this->conn->query($sql);
        if ($data) {
            return $data;
        }
        return false;

    }

    public function addquestion($language,$question,$option1,$option2,$option3,$option4,$answer){
        $sql = "INSERT INTO question ( language,question,option1,option2,option3,option4,answer)
        VALUES ('$language','$question','$option1','$option2','$option3','$option4','$answer')";
        $data=$this->conn->query($sql);
        if ($data) {
            return $data;
        }
        return false;

    }
    public function getquestion($language){
        $sql="SELECT * FROM `question` WHERE `language`='$language'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0) {
            $arr=array();
            while ($row=$data->fetch_assoc()) {
                $arr[]=$row;
            }
            return ($arr);
        }
        return false;
    }
   
    

    public function showTable(){
        $sql="select*from topic;";
        $query=mysqli_query($conn,$sql);
        while($result=mysqli_fetch_array($query)){
            return $result;
        }
    }
    
}
?>