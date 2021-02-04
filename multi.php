
<?php include 'head.php' ;
include_once 'dbcon.php' ;
?>
<style>
    #regForm {
	background-color:#159cadb5;
	margin: 0px auto 100px;
	padding: 40px;
	width: 70%;
	min-width: 300px;
  }
   .inp {
	padding: 10px;
	width: 100%;
	font-size: 17px;
	font-family: Raleway;
	border: 1px solid #aaaaaa;
  }
  input.invalid {
	background-color: #ffdddd;
  }
  .tab {
	display: none;
  }
  .next {
	background-color: #4CAF50;
	color: white;
  }
  h1{
      text-align:center;
  }
</style>
<h1 style="margin-top:10px;"><b>Online Quiz<b></h1>
<div style="margin-bottom:10px;text-align:center;font-size:30px;">
Time : <span id="timer"></span>
</div>
<?php
$dbcon=new dbcon();
$conn=$dbcon->createConnection();
$language=$_GET['id'];
$id = isset($_GET['id'])?$_GET['id']:1;
$qno=1;
$count=0;
$sql="SELECT * FROM `question` WHERE `language`='$language' ";
$data=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($data))
{   $count++;
    $_SESSION['id'] = $row['id'];
    $question = $row['question'];
    $op1 = $row['option1'];
    $op2 = $row['option2'];
    $op3 = $row['option3'];
    $op4 = $row['option4'];
    $answer = $row['answer'];

?>


<form id="regForm" method="POST" action="result.php">




<div class="tab">Question:
<p><input class="inp" value="<?php echo $question; ?>" style="border:none;" ></p> <br>
<p><input type="radio" name="question<?php echo $count;?>"  value="<?php echo $op1; ?>"/> <?php echo $op1; ?></p> 
<p><input type="radio" name="question<?php echo $count;?>"  value="<?php echo $op2; ?>"/> <?php echo $op2; ?> </p>
<p><input type="radio" name="question<?php echo $count;?>"  value="<?php echo $op3; ?>"/> <?php echo $op3; ?></p>
<p><input type="radio" name="question<?php echo $count;?>"  value="<?php echo $op4; ?>"/> <?php echo $op4; ?></p>
  
</div>
<?php
}
?>
<div style="overflow:auto;">
  <div style="float:right;">
  <input type="submit" id="btn" name="btn" hidden/>
    <button type="button" id="prevBtn" class="btn btn-light" onclick="nextPrev(-1)">Previous</button>
    <button type="button" class="btn btn-light" id="nextBtn" onclick="nextPrev(1)">Next</button>

  </div>
</div>

<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>

</form>
<?php include 'footer.php' ;?>
<script>
var currentTab = 0; 
showTab(currentTab); 

function showTab(n) {
  
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
 
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
 
  var x = document.getElementsByClassName("tab");
 
  if (n == 1 && !validateForm()) return false;
 
  x[currentTab].style.display = "none";
 
  currentTab = currentTab + n;
 
  if (currentTab >= x.length) {
  
    document.getElementById("regForm").submit();
    return false;
  }
  
  showTab(currentTab);
}

function validateForm() {
  
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
 
  for (i = 0; i < y.length; i++) {
   
    if (y[i].value == "") {
     
      y[i].className += " invalid";
      
      valid = false;
    }
  }
 
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; 
}

function fixStepIndicator(n) {
  
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
 
  x[n].className += " active";
}

var sec = 60;
var time = setInterval(myTimer, 1000);
function myTimer() {
    document.getElementById('timer').innerHTML = sec + "sec left";
    sec-=1;

    if (sec == -1) {
        clearInterval(time);
        alert("Time out!! :(");
        document.getElementById('btn').click();
    }
}
</script>
