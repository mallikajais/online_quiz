<?php
session_start();
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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>

<body style="margin-right:0px;overflow-x: hidden">

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="height:15vh;">
        <a class="navbar-brand" href="#" style="color: #159cad;font-size: 55px;margin-top:-15px;">O<span style="color:white;">nline</span>Q<span style="color:white;">uiz</span>
        <i class="fa fa-hourglass-start" aria-hidden="true" style="font-size:50px;"></i></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            </ul> 
            <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.php" style="font-size:15px; color: white;"><span class="glyphicon glyphicon-user btn btn-info"></span>  Sign Up  </a></li>
                <li><a href="login.php" style="font-size:15px; color: white;"><span class="glyphicon glyphicon-log-in btn btn-info" ></span>  Logout  </a></li>
            </ul>
        </div>
    </nav>
</div>
</body>
</html>