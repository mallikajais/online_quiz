<?php 
include 'head.php';
?>

<?php
error_reporting(0);
include_once 'dbcon.php' ;
$dbcon=new dbcon();
$conn=$dbcon->createConnection();
$qno=1;
if(isset($_POST['next'])){
  echo $_SESSION['sec']=$_POST['btn'];
    $radiovalue=$_POST['question1'];
    $_SESSION['mark'][]="$radiovalue";
    global $qno;
    if($_SESSION['id']==7){
      echo '<script>document.getElementById("next").style.display=none;</script>';
       $qno=$_SESSION['id']; 
    }
    else
    $qno =$_SESSION['id']+1;
}
if(isset($_POST['previous'])){
    global $qno;
    if($_SESSION['id']==1){
      echo '<script>document.getElementById("previous").style.display=none;</script>';
       $qno=$_SESSION['id']; 
    }
    else
    $qno =$_SESSION['id']-1;
}
if(isset($_POST['submit'])){
    header('location:result.php');
}
// $_SESSION['language'] = $_GET['id'];
$id = isset($_GET['id'])?$_GET['id']:1;
$sql="SELECT * FROM `question`where `id`=$qno ";
$data=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($data))
{
    $_SESSION['id'] = $row['id'];
    $question = $row['question'];
    $op1 = $row['option1'];
    $op2 = $row['option2'];
    $op3 = $row['option3'];
    $op4 = $row['option4'];
    $answer = $row['answer'];
}
?>
<div  style="height:55vh;margin-top:3%;margin-bottom:5%;">
<!-- <div style="margin-bottom:10px;">
Time : <span id="timer"></span>
</div> -->
<form method="post" action="show.php" style="font-size:25px">
<?php echo $question ?>  <br>
<input type="radio" name="question1"  value="<?php echo $op1; ?>"> <?php echo $op1; ?> <br>
<input type="radio" name="question1" value="<?php echo $op2; ?>"> <?php echo $op2; ?> <br>
<input type="radio" name="question1" value="<?php echo $op3; ?>"> <?php echo $op3; ?> <br>
<input type="radio" name="question1" value="<?php echo $op4; ?>"> <?php echo $op4; ?> <br>
<input type="text" id="answer" name="answer" style="display:none;" value="<?php echo $answer; ?>">
<input type="submit" name="previous" class="btn btn-info" value="Previous"> 
<input type="submit" name="next" class="btn btn-info" id="next" value="Next">
<input type="submit" id="btn" name="btn" hidden/>
<div class="form-group " style="margin-right:43%;"><input type="submit" class="btn btn-info " name="submit"  value="submit" id="submit"></div>

</form>
<div>
<?php include 'footer.php';?>
<script>
var sec = 15;
var time = setInterval(myTimer, 1000);
function myTimer() {
    document.getElementById('timer').innerHTML = sec + "sec left";
    sec-=1;
   <?php $_SESSION['sec']?>=sec;
    if (sec == -1) {
        clearInterval(time);
        alert("Time out!! :(");
        document.getElementById('submit').click();
    }
}
</script>
