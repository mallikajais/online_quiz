<?php 
include 'header.php';
include_once 'function.php' ;
?>
<div>
    <form>
        <div class="form-group">
        <?php
            if(isset($_GET['id'])){
                 $language=$_GET['id'];
                $test=new test();
                $data=$test->getquestion($language);
                if ($data!=false) {
                    foreach($data as $key=>$value){
                        foreach($value as $key1=>$value1){
                            
                            if(($key1!='language')&& ($key1!='answer')&& ($key1!='id')){
                                if($key1=='question'){
                                    echo "<br>";
                                    echo '<option value="'.$value1.'">'."</option>";
                                }
                                echo $value1;
                                echo "<br>";
                                echo '<input type="radio" name="ques" value="'.$value1.'"/>';
                            }
                        }
                    }
                }
            }					
        ?> 
            <div class="container">
            <ul class="pager">
                <li><a href="#" style="color: #159cad;font-size:15px;">Previous</a></li>
                <li><a href="#" style="color: #159cad;font-size:15px;">Next</a></li>
            </ul>

            </div>
        </div>
        
        <!-- <div><input type="button" class="btn btn-info" id="submit" name="submit" value="Submit"/></div> -->
    </form>
</div>
<?php include 'footer.php';?>