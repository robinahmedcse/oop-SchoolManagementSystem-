<?php 


class group {


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





public function add_student_group_info($data){
    //$query ="INSERT into class() VALUES();";
    $query ="INSERT into student_group(group_name)VALUES('$data[group_name]');";

        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
            echo ( mysqli_error($this->link));
        }
        else{
            $message="Class info save successfully";
            $_SESSION['message']=$message;
            header("location:view-student-group.php");
        } 


}



    public function view_all_group_info(){

       $query ="SELECT * FROM student_group";


   //  $query ="SELECT section.section_id, section.section_name,section.section_capacity,section.section_note,class.class_name
     // FROM section INNER JOIN class ON section.class_id=class.class_id";


        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
            echo ( mysqli_error($this->link));
        }
        else{
    
            return $run_query;
            
        }   


}



public function delete_group_info($id){

$query="DELETE FROM student_group WHERE group_id='$id'";
$run_query =mysqli_query($this->link, $query);

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