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
</head>
<body>
<?php include 'header.php';?>
<div>
    <div class="signup-form" style="height:62vh;margin-top:30px;">
        <center>
        <form >
            <h2 style="margin-bottom:20px;"> Registration Form</h3>
            <div class="form-group ">
                <input type="text" name="name" class="form-control" id="name" placeholder="name.." required>
            </div> 
            <div class="form-group ">
                
                <input type="password" class="form-control" name="password" id="password" placeholder="enter password.." required>
            </div>
            <div class="form-group ">
                <input type="email" class="form-control" id="email" name='email' placeholder="email" required>
                
            </div>
            
            <div class="form-group ">
               
                <input type="number" class="form-control" id="number" name='number' placeholder="Number" required>
                
            </div>
            
            <div class="form-group  ">

            <input type="button" class="btn btn-info" id="submit" name="submit" value="submit">
            </div>
        </form>
        <center>
    </div>
    
    
</div>
<?php include 'footer.php';?>
<script>
$(document).ready(function(){
        $('#submit').click(function(){
            var email=$('#email').val(); 
            var name=$('#name').val(); 
            var number=$('#number').val(); 
            var password=$('#password').val();
            console.log(name);
            if((email!="")&& (name!="")&&(number!="")&&(password!="")){
                $.ajax({
                    url:"handler.php",
                    type:'POST',
                    data:{email:email,
                        name:name,
                        number:number,
                        password:password
                        }
                    ,success :function(result){
                        alert(result);
                        if(result=="New record created successfully"){
                            $('.verify').text("success");
                        }
                        else{
                            $('.verify').text("error");
                        }
                    }
                });
            }
        })
    })
</script>

</body>
</html>