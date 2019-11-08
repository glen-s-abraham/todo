<?php
require 'list.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
$l=new DoList();

$l->delete_task($id);
header('location:index.php');
?>