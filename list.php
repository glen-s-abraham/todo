<?php

 
class DoList{
    
    
    public function fetch_list($sort_date)
    {
        
        
        require_once('config.php');
        
        
        if($sort_date=="")
        $q="select * from tasks order by task_id desc";
        
        
        else
        $q="select * from tasks where date='".$sort_date."' order by task_id desc";   
        
        //echo $q;
        $r=mysqli_query($con,$q);
        return $r;
             
        
        
    }
    public function add_to_list($data)
    {
        require_once('config.php');
         //print_r($data);
         $user=1;
         $q="INSERT INTO tasks(user_id, title, description,date)VALUES($user,'";
         $q.=$data['title']."','".$data['descreption']."','".$data['date']."')"; 
             
         //echo $q;
         
         mysqli_query($con,$q);
         
    }
    public function delete_task($id)
    {
            require_once('config.php');
        
            $q="delete from tasks where task_id=".$id;
            echo $q;
            mysqli_query($con,$q);
            return;
            
        
    }
    public function fetch_by_id($id)
    {
        require_once('config.php');
        $q="select * from tasks where task_id=".$id;
        //echo $q;
        $r=mysqli_query($con,$q);
        
        return $r;
    }
    public function update_task($data)
    {
            include('config.php');
            
            $q="update tasks set title='".$data['title']."',description='".$data['descreption']."',date='".$data['date']."' ";
            $q.="where task_id=".$data['id'];
            
            echo $q;
            mysqli_query($con,$q);
            return;
            
        
    }
    
}
?>