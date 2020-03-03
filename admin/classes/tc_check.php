<?php 



if(isset($_POST["user_name"]))
{
    $username = $_POST["user_name"];
    


 
    require 'teacher.php';
    $object_teacher = new teacher();
    
    $username = $_POST["user_name"];
  //  echo  $username ;
    $run_query = $object_teacher->check_teacher_username($username);

  //  $result=  mysqli_fetch_assoc($run_query);
   // print_r($result);
     echo mysqli_num_rows($run_query);

  

  
  
 



}




 



?>