<?php
$URL='localhost';
$USER='root';
$PASS='';



$con=mysqli_connect($URL,$USER,$PASS);
if(!$con)
die("SQL Connection Error");
else
{
    if(!mysqli_select_db($con,'todolist'))
        echo "Database not found!";
}
?>