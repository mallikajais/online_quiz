<?php include 'head.php' ;
include_once 'dbcon.php' ;
?>
<div class='text-center back text-white' style="height:67vh;padding-top:10%;">

<?php
error_reporting(0);
$check= $_POST;
// print_r($check);
$score=0;
$dbcon=new dbcon();
$conn=$dbcon->createConnection();
$sql="SELECT answer FROM `question` ";
$data=mysqli_query($conn,$sql);
while ($row=$data->fetch_assoc()) 
{
//  $check=$_POST;
 foreach($check as $key=>$value){
    if($value==$row['answer']){
        $score++;
    }
 }
}
if($score>5){
    
    echo "<h1 class='text-white'>Your Score is : ".$score."</h1><br>";
    echo "<h1>Congrats You Are Pass :) </h1>";
}
else{
    echo "<h1>Your Score is : ".$score."</h1><br>";
    echo "<h1>Oops You Are Fail :( </h1>"; 
}
?>

</div>
<?php
session_destroy();
?>
<?php include 'footer.php' ;?>