<?php
include('header.php');
?>
<br>
<br>
<div class="container overflow-auto">
<form  method="post">
    <div  class="input-group mb-3">
    
    <input type="date"   name="sort_date"  class="form-control">
        <div class="input-group-append">
    <input type="submit" value="Sort" name="sort"  class="btn btn-primary">
  </div>
          <div class="input-group-append">
   <a href="add_task.php" class="btn btn-dark" style="float:rigth;">Add+</a>
  </div>
          
    
</div>
    
</form>
<?php
require 'list.php';
$l=new DoList();


if(isset($_POST['sort_date']))
    $date=$_POST['sort_date'];
else
    $date="";
    //date('Y').'-'.date('m').'-'.date('d');
    


 $r=$l->fetch_list($date);
   
   
  
 /*   <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>*/
 
 while($row=mysqli_fetch_assoc($r))
                {
                    echo "<div class='card'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>".$row['title']."</h5>";
                    echo "<p class='card-text'>";
                    echo '<a href="update_task.php?id='.$row["task_id"].'">';
                    echo "descreption: ".$row['description'];
                    echo " date: ".$row['date'];
                    echo "</a><br>";
                    echo "</p>";
                    echo '<a class="btn btn-primary" href="delete_task.php?id='.$row["task_id"].'">delete</a><br>';
                    echo "</div>";
                    echo "</div>";
        
     
                }
                   
                   


?>
 

   

 </div>
<br>
<br>
   
<?php include('footer.php');?>
    