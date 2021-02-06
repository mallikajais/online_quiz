<?php include "head.php"?>
<div style="height:60vh;margin-top:3%;">
<table class=" table table-striped table-hover table-border text-center" style="width:70%;margin-top:10px;margin-left:15%;" id="search" >
            
                <thead>
                    <tr class="bg-dark text-white text-center">
                    <th>S.No</th>
                    <th>Topic</th>
                    <th>Total Questions</th>
                    <th>Action</th>
                    
                    </tr>
                </thead>
            <?php
                
                $conn = new mysqli('localhost', 'root', '','onlinetest');
                $q="SELECT*from topic ";
                $query=mysqli_query($conn,$q);
                while($result=mysqli_fetch_array($query)){
                    $_SESSION['id']=$result["id"];
            ?>
            <tbody>
                <tr>
                    <td><?php echo $result["id"];?></td> 
                    <td><?php echo $result["topic"];?></td> 
                    <td><?php echo $result["totalques"];?></td>
                    
                    <td><button class="btn btn-info" > <a class="text-white" href="multi.php?id=<?php echo $result['topic'];?>"> start</a></button></td>
                    
                </tr>
            </tbody>
            <?php 
                }
            ?>
            </table>
        </div>
    </div>
</div>
<script> 
// $(document).ready(function() {
//       showTopic();
// });
//     function showTopic(){
//           $('#search').DataTable( {
//               "ajax": "handlerequest.php?showtopic=1"
//           } ); 
//     }
</script>
<?php include "footer.php"?>