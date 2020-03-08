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

  

  
  


}elseif(isset($_GET["id"])){

  require 'teacher.php';
$object_teacher = new teacher();


  $id = $_GET["id"];
  $run_query = $object_teacher->find_teacher_by_id($id);
  $result= $result=  mysqli_fetch_assoc($run_query);

 
  // echo $result['tc_id'];
  // echo $result['tc_name'];
  // echo $result['tc_designation'];
  // echo $result['tc_dob'];
  // echo $result['tc_gender'];
  // echo $result['tc_religion'];
  // echo $result['tc_email'];
  // echo $result['tc_address'];
  // echo $result['tc_joining_date'];
  // echo $result['tc_photo'];
  // echo $result['tc_username'];



            echo'<div class="row">
            <div class="col-md-3">
            <br /> <img src="'.$result["tc_photo"].'" class="img-responsive img-thumbnail" /> 
              </div>
            <div class="col-md-9">
            <br />
            <p><label>Name :&nbsp;</label>'.$result['tc_name'].'</p><br>
            <p><label>Designation :&nbsp;</label>'.$result['tc_designation'].'</p><br>
            <p><label>Joining Date :&nbsp;</label>'.$result['tc_joining_date'].'</p><br>
            <p><label>Date Of Birth :&nbsp;</label>'.$result['tc_dob'].'</p>  <br>
            <p><label>Gender :&nbsp;</label>'.$result['tc_gender'].'</p><br>
            <p><label>Religion :&nbsp;</label>'.$result['tc_religion'].'</p><br>
            <p><label>Email :&nbsp;</label>'.$result['tc_email'].'</p><br>
            <p><label>Phone Number :&nbsp;</label>'.$result['tc_phone'].'</p><br>
            <p><label>Username :&nbsp;</label>'.$result['tc_username'].'</p><br>
            <p><label>Address :&nbsp;</label>'.$result['tc_address'].'</p><br>
      
            </div>
            </div><br />
            ';

 
//en of elseif 
}

elseif(isset($_POST["teacher_id"])){

      require 'teacher.php';
      $object_teacher = new teacher();
      
      $id = $_POST["teacher_id"];
    //  echo  $id ;
      $object_teacher->delete_teacher_info($id);

}




 



?>