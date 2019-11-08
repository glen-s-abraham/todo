<?php include('header.php');?>
<?php
require 'list.php';
$l=new DoList();
$res=$l->fetch_by_id($_GET["id"]);
$row=mysqli_fetch_assoc($res);
?>

<div class="container jumbotron">
    <h5>Add a Task</h5>
    <br>
<form method="post">
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" name="date" value="<?php echo $row['date']?>" required>
    </div>
    <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $row['title']?>" required>
    </div>
    <div class="form-group">
    <label for="Descreption">Descreption</label>
    <input type="text" class="form-control" name="descreption" value="<?php echo $row['description']?>">
    </div>
    
    
 
  <input type="submit" class="btn btn-primary" name="update">
    <a href="index.php" class="btn btn-outline-primary">back</a>
</form>
    
<?php
    if(isset($_POST["update"]))
    {
        $data['id']=$_GET["id"];
        $data["title"]=$_POST["title"];
         if(isset($_POST["descreption"]))
        $data["descreption"]=$_POST["descreption"];
        else
        $data["descreption"]="no descreption";
        $data["date"]=$_POST["date"];
        $l->update_task($data);
        header('location:index.php');
    }
    
?>
    <?php include('footer.php');?>
    