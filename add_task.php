<?php include('header.php');?>


<div class="container jumbotron">
    <h5>Add a Task</h5>
    <br>
<form method="post">
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" name="date" required>
    </div>
    <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" required>
    </div>
    <div class="form-group">
    <label for="Descreption">Descreption</label>
    <input type="text" class="form-control" name="descreption">
    </div>
    
    
 
  <input type="submit" class="btn btn-primary" name="add">
    <a href="index.php" class="btn btn-outline-primary">back</a>
</form>

<?php
require 'list.php';
$l=new DoList();
if(isset($_POST["add"]))
{
    $data["title"]=$_POST["title"];
    if(isset($_POST["descreption"]))
    $data["descreption"]=$_POST["descreption"];
    else
    $data["descreption"]="no descreption";
    $data["date"]=$_POST["date"];
    $l->add_to_list($data);
    header('location:index.php');
}
?>
    

    </div>
<?php include('footer.php');?>