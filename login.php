<?php
$conn = new mysqli('localhost', 'root', '','onlinetest');
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
$_SESSION['email']=$email;
$_SESSION['password']=$password;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $q="select*from info where email='$email' and password='$password'";
  $query=mysqli_query($conn,$q);
  $check = mysqli_fetch_array($query);
  $sql = "SELECT * FROM `info` WHERE  email='$email'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $_SESSION['name']=$row["name"];
          $_SESSION['number']=$row["number"];
          $_SESSION['password']=$row['password'];
          $_SESSION['email']=$row['email'];
          if(($email=='jaiswalmallika0126@gmail.com')&&($password=='1234')){
            header('location:addquestion.php');
          }
          else{
            if(($email==$row["email"])&&($password==$row["password"])){
              header('location:test.php');
            }
            else {
              echo "<script>alert('invalid emailid or password')</script>s";
            }
          }
      }
  } else {
      echo "0 results";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    .form-group{
        width:80%;
        margin-bottom: 15px;
        margin-left:0px;
    }
    h2{
      color:#0d47a1;
      margin-top:40px;
      margin-bottom:40px;
      text-align:center;
    }
    .form-control{
        margin-left:0px;
    }
</style>
</head>
<body style="margin-right:0px;overflow-x: hidden">
    <?php include 'head.php'; ?>
    
        <div style="height:57vh;">
            <h2 style="margin-top:60px;"> Login</h2>
            <center>
            <form  method="post">
            
            <div class="form-group ">
            
            <input type="text" class="form-control" id="email" placeholder="Enter User Name" name="email" required>
            </div>
            <div class="form-group ">
            
            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
            </div>
            <div class="form-group ">
            
            <input type="submit" class="btn btn-info " name="submit" value="Log In">
            </div>
            
            </form>
            </center>
        </div>
<?php include 'footer.php';?>
</body>
</html>