<?php 


 

if(isset($_GET["subject_id"])){

  require 'stu_subject.php';
  $object_stu_subject = new stu_subject();


  $id = $_GET["id_class"];
//  $run_query = $object_class_file->find_class_by_id($id);
  //$result= $result=  mysqli_fetch_assoc($run_query);
 /*

            echo'<div class="col-md-9">
            <br />
            <p><label>ID :&nbsp;</label>'.$result['class_id'].'</p><br>

            <p><label>Class Name :&nbsp;</label>'.$result['class_name'].'</p><br>
          
            <p><label>Teacher Name:&nbsp;</label>'.$result['tc_name'].'</p><br>

            <p><label>Note :&nbsp;</label>'.$result['class_note'].'</p><br>
        
 
            </div><br />
            ';

 */
//en of elseif 
}

elseif(isset($_POST["subject_id"])){

      require 'stu_subject.php';
      $object_stu_subject = new stu_subject();
      
      $id = $_POST["subject_id"];
    //  echo  $id ;
   //   $object_class_file->delete_classFile_info($id);

}




 



?>