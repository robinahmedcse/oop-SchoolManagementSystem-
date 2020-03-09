<?php 


class section {


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





public function add_class_info($data){
    //$query ="INSERT into class() VALUES();";
    $query ="INSERT into class(class_name,tc_id,class_note)
     VALUES('$data[class_name]','$data[teacher]','$data[note]');";

        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
            echo ( mysqli_error($this->link));
        }
        else{
            $message="Class info save successfully";
            $_SESSION['message']=$message;
            header("location:view-class.php");
        } 


}



    public function view_all_section_info(){

     //   $query ="SELECT * FROM class";


     $query ="SELECT section.section_id, section.section_name,section.section_capacity,section.section_note,class.class_name
      FROM section INNER JOIN class ON section.class_id=class.class_id";


        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
            echo ( mysqli_error($this->link));
        }
        else{
    
            return $run_query;
            
        }   


}



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




public function find_class_by_id($id){

   // $query="SELECT * FROM class WHERE class_id ='$id'";


  //  $sql="SELECT p.*,c.category_name,m.manufacture_name FROM tbl_product as p ,tbl_category as c, tbl_manufacture as m"
     //            . " WHERE p.category_id=c.category_id And p.manufacture_id=m.manufacture_id and p.product_id='$id'";



     $query="SELECT c.*,t.tc_name 
     FROM class as c,teacher as t 
     WHERE c.tc_id = t.tc_id and class_id ='$id'";


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