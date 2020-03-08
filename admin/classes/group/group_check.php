<?php 


 
 if(isset($_POST["group_id"])){

  require 'group.php';
  $obj_stu_group = New group();
      
      $id = $_POST["group_id"];
 //  echo  $id ;
    $obj_stu_group->delete_group_info($id);

}




 



?>