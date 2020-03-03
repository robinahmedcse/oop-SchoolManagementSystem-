<?php

class teacher {
 
    private $link;
    public function __construct() {
        $host='localhost';
        $user='root';
        $password='';
        $database='schoolms1';
        $this->link = mysqli_connect($host, $user, $password, $database);
    
        if(!$this->link){
              echo ( mysqli_error($this->link));
        }    
    }
    
    
    public function save_student_info($data){

        
        $query="INSERT INTO add_stu(stu_name,stu_email,stu_phone,stu_address) "
                . "VALUES('$data[fname]','$data[email]','$data[phone_no]','$data[address]')";
        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
             echo ( mysqli_error($this->link));
        }
        else{
            $message="Student info save successfully";
           return $message;
        }        
    }
    
   
       public function view_student_info(){
          $query="SELECT * FROM add_stu";
        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
             echo ( mysqli_error($this->link));
        }
        else{
//            $message="Student info save successfully";
//            echo $message;
            //$result=  mysqli_fetch_assoc($run_query);
//            print_r($result);
            return $run_query;
            
        }    
    }
    
    
    public function edit_student_info($catch_id){
        //echo "get id =".$catch_id;
           $query="SELECT * FROM add_stu WHERE stu_id='$catch_id'";
        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
             echo ( mysqli_error($this->link));
        }
        else{
            //  $result=  mysqli_fetch_assoc($run_query);
            // print_r($result);
            return $run_query;
            
        } 
        
    }
    
    public function update_student_info($catch) {
//        $message="Student info Update successfully";
//             echo $message;
        
//        var_dump($catch);
//        die();
        
          $query="UPDATE add_stu SET stu_name='$catch[fname]',stu_email='$catch[email]',stu_phone='$catch[phone_no]',stu_address='$catch[address]'WHERE stu_id='$catch[id_stu]'";
          
        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
             echo ( mysqli_error($this->link));
        }
        else{           
            header('location:view.php');           
        } 
    }
    
    
      public function delete_student_info($catch) {
         //  echo $catch;
        $query="DELETE FROM add_stu WHERE stu_id='$catch'";
        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
             echo ( mysqli_error($this->link));
        }
        else{
            header('location:view.php');  
            
        } 
          
          
    }
    
    
    
    
    
    
    
    
}
