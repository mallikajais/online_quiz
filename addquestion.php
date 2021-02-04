<?php include 'header.php';?>
<div style="margin-top:3%;">
    <form>
        <div class="form-group">
            <label>Technology</label>
            <select class="form-control" id="lang" name="lang">
                <option>select language</option>
                <option>php</option>
                <option>python</option>
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
            <input type="text" id="answer" name="answer" placeholder="answer" class="form-control"/>

        </div>
        
        <div style="margin-left:45%;margin-bottom:3%;"><input type="button" class="btn btn-info" id="add" name="add" value="Add Question"/></div>
    </form>
</div>
<script>
$(document).ready(function(){
        $('#add').click(function(){
            var language=$('#lang').val();
            var question=$('#question').val(); 
            var option1=$('#option1').val(); 
            var option2=$('#option2').val(); 
            var option3=$('#option3').val();
            var option4=$('#option4').val();
            var answer=$('#answer').val();
            console.log(language);
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
</script>
<?php include 'footer.php';?>