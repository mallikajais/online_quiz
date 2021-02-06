<?php include 'head.php';
include 'dbcon.php';
$dbcon=new dbcon();
$conn=$dbcon->createConnection();
?>
<div style="margin-top:30px;">
    <form>
        <div class="form-group">
            <label>Technology</label>
            <select class="form-control" id="language" name="language">
                <option selected disabled>select language</option>
                <?php
                    $query = "SELECT * FROM topic";
                    $query_run1 = mysqli_query($conn, $query);
                    while ($row1 = mysqli_fetch_array($query_run1)) {
                        echo "<option value='".$row1['topic']."'>".$row1['topic']."</option>";
                    }
                ?>
            </select>
            
            <label>Question</label>
            <input type="text" id="question" name="question" class="form-control"/>
        
            <label>option1</label>
            <input type="text" id="option1" name="option1" class="form-control"/>
            <label>option2</label>
            <input type="text" id="option2" name="option2" class="form-control"/>
            <label>option3</label>
            <input type="text" id="option3" name="option3" class="form-control"/>
            <label>option4</label>
            <input type="text" id="option4" name="option4" class="form-control"/>
            <label>Answer</label>
            <select id="answer" name="answer" class="form-control"></select>
            
        </div>

    </form>
    <div style="margin-left:40%;margin-bottom:3%;">
        <input type="button" class="btn btn-info" id="add" name="add" value="Add Question"/>
        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info"  value="Add Language">Add Language</button> 
    
         <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title">Add Language</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
          <form>
                <label>Language</label>
                <input type="text" id="technology" name="technology"/>
          </form>
        </div>
    
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info" id="send" name="send" data-dismiss="modal">Add</button>
        </div>
        
      </div>
    </div> 
  </div>
  
</div>
    </div>
</div>
<script>
$(document).ready(function(){
        $('#send').click(function(){
            var technology=$('#technology').val();
            if(technology!=""){
                $.ajax({
                    url:"handler.php",
                    type:'POST',
                    data:{
                        'technology':technology
                    },
                    success :function(result){
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
        });
});
$(document).ready(function(){
        $('#add').click(function(){
            var language=$('#language').val();
            var question=$('#question').val(); 
            var option1=$('#option1').val(); 
            var option2=$('#option2').val(); 
            var option3=$('#option3').val();
            var option4=$('#option4').val();
            var answer=$('#answer').val();
            
            if((question!="")&& (option1!="")&&(option2!="")&&(option3!="")&&(option4!="")&&(answer!="")){
                $.ajax({
                    url:"handler.php",
                    type:'POST',
                    data:{
                        language:language,
                        question:question,
                        option1:option1,
                        option2:option2,
                        option3:option3,
                        option4:option4,
                        answer:answer
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

    $('#option1').focusout(function(){
        var ans1=$(this).val();
        $("#answer").append(`<option>${ans1}</option>`);
    })
    $('#option2').focusout(function(){
        var ans1=$(this).val();
        $("#answer").append(`<option>${ans1}</option>`);
    })
    $('#option3').focusout(function(){
        var ans1=$(this).val();
        $("#answer").append(`<option>${ans1}</option>`);
    })
    $('#option4').focusout(function(){
        var ans1=$(this).val();
        $("#answer").append(`<option>${ans1}</option>`);
    })
</script>
<?php include 'footer.php';?>