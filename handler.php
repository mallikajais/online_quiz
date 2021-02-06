<?php
session_start();
require_once "function.php";
$test=new test();

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    $result=$test->signup($email,$name,$number,$password);
    if($result!=false){
        echo "New record created successfully";
        $_session['email']=$email;
        $_session['name']=$name;
        $_session['number']=$number;
        $_session['password']=$password;
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if(isset($_POST['technology'])){
    $technology=$_POST['technology'];
    echo $technology;
    $data=$test->addlanguage($technology);
    echo $data;
    if($data!=false){
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['question'])){
    $question=$_POST['question'];
    $language=$_POST['language'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $answer=$_POST['answer'];
   
    $result=$test->addquestion($language,$question,$option1,$option2,$option3,$option4,$answer);
    if($result!=false){
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



?>