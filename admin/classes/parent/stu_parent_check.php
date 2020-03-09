<?php 


if(isset($_POST["user_name"]))
{
    $username = $_POST["user_name"];
    


 
    require 'stu_parent.php';
    $object_parent = new stu_parent();
    
    $username = $_POST["user_name"];
  //  echo  $username ;
    $run_query = $object_parent->check_parent_username($username);

  //  $result=  mysqli_fetch_assoc($run_query);
   // print_r($result);
     echo mysqli_num_rows($run_query);

  

  
  


}elseif(isset($_GET["id"])){

  require 'stu_parent.php';
$object_parent = new stu_parent();


  $id = $_GET["id"];
 // echo $id;

 
  $run_query = $object_parent->find_parent_by_id($id);
  $result= mysqli_fetch_assoc($run_query);



            echo'<div class="row">
            
            <div class="col-md-12">
            <br />
            <p><label>Parent id:&nbsp;</label>'.$result['parents_id'].'</p><br>
            <p><label>Guardian Name :&nbsp;</label>'.$result['guardian_name'].'</p><br>
            <p><label>Father Name:&nbsp;</label>'.$result['father_name'].'</p><br>
            <p><label>Mother Name:&nbsp;</label>'.$result['mother_name'].'</p><br>
            <p><label>Father Profession :&nbsp;</label>'.$result['father_profession'].'</p>  <br>
            <p><label>Mother Profession :&nbsp;</label>'.$result['mother_profession'].'</p><br>
            <p><label>Email :&nbsp;</label>'.$result['parents_email'].'</p><br>
            <p><label>Phone Number :&nbsp;</label>'.$result['parents_phone'].'</p><br>
            <p><label>Username :&nbsp;</label>'.$result['parents_username'].'</p><br>
            <p><label>Address :&nbsp;</label>'.$result['parents_address'].'</p><br>
      
            </div>
            </div><br />
            ';
 
 
//en of elseif 
}

elseif(isset($_POST["parent_id"])){

  require 'stu_parent.php';
  $object_parent = new stu_parent();
      
      $id = $_POST["parent_id"];
    //  echo  $id ;
     $object_parent->delete_parent_info($id);

}




 



?>