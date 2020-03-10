<?php 


class stu_subject {


    private $link;
    public function __construct() {
        $host='localhost';
        $user='root';
        $password='';
        $database='schoolms';
        $this->link = mysqli_connect($host, $user, $password, $database);
    
        if(!$this->link){
              echo ( mysqli_error($this->link));
        }    
    }


public function class_list_find_out(){
        
       $query ="SELECT class_id,class_name FROM class";

       $run_query_class= mysqli_query($this->link, $query);
       if(!$run_query_class){
           echo ( mysqli_error($this->link));
       }
       else{
   
           return $run_query_class;
           
       }   


// end of class_list_find_out;
}



public function teacher_list_find_out(){
        
    $query ="SELECT tc_id,tc_name FROM teacher";

    $run_query_teacher= mysqli_query($this->link, $query);
    if(!$run_query_teacher){
        echo ( mysqli_error($this->link));
    }
    else{

        return $run_query_teacher;
        
    }   


// end of teacher_list_find_out;
}









    
 

public function add_subject_info($data){
    //$query ="INSERT into class() VALUES();";
    $query ="INSERT into subject(class_id,tc_id,subject_type,subject_pass_mark,
    subject_final_mark,subject_name,subject_author_name,subject_code)
     VALUES('$data[class]','$data[teacher]','$data[subject_type]','$data[pass_mark]'
     ,'$data[final_mark]','$data[subj_name]','$data[subj_author]','$data[subj_code]');";

        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
            echo ( mysqli_error($this->link));
        }
        else{
            $message="Subject info save successfully";
            $_SESSION['message']=$message;
            header("location:view-subject.php");
        } 


}


 

    public function view_all_subject_info(){

        $query ="SELECT * FROM subject";

    $query ="SELECT subject.subject_id,subject.subject_name,subject.subject_code, subject.subject_type,class.class_name
   FROM subject INNER JOIN class ON subject.class_id=class.class_id";


 //    $query ="SELECT section.section_id, section.section_name,section.section_capacity,section.section_note,class.class_name
   //   FROM section INNER JOIN class ON section.class_id=class.class_id";


        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
            echo ( mysqli_error($this->link));
        }
        else{
    
            return $run_query;
            
        }   


}



/*


public function delete_classFile_info($id){

$query="DELETE FROM class WHERE class_id='$id'";
$run_query =mysqli_query($this->link, $query);

    if(!$run_query){
        echo ( mysqli_error($this->link));
    }
    else{
        return $run_query;
    
    }


}

*/


public function find_subject_by_id($id){

    $query="SELECT * FROM class WHERE class_id ='$id'";


  //  $sql="SELECT p.*,c.category_name,m.manufacture_name FROM tbl_product as p ,tbl_category as c, tbl_manufacture as m"
     //            . " WHERE p.category_id=c.category_id And p.manufacture_id=m.manufacture_id and p.product_id='$id'";

/*

     $query="SELECT c.*,t.tc_name 
     FROM class as c,teacher as t 
     WHERE c.tc_id = t.tc_id and class_id ='$id'";

*/

    $run_query= mysqli_query($this->link, $query);
    if(!$run_query){
         echo ( mysqli_error($this->link));
    }
    else{

        return $run_query;
        
    } 



}




 


public function view_all_teacher_info_for_class(){
    $query="SELECT tc_id, tc_name FROM teacher";
    $run_query= mysqli_query($this->link, $query);
    if(!$run_query){
         echo ( mysqli_error($this->link));
    }
    else{
          return $run_query;
        
    }   
}

 




// end of class_file
}
?>