<?php

class teacher {
 
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
    
    
    public function save_teacher_info($data){

       
                $action = 'encrypt';
                $password_main=$data['password'];

            $password_e= $this->convert_string($action, $password_main);    

            // echo'<br>';
            // $action = 'decrypt';

            // $password_d= $this->convert_string($action, $password);
            // echo   $password_d;
            // die();

        
        $query="INSERT INTO teacher(tc_name,tc_designation,tc_dob,tc_gender,tc_religion,tc_email,
        tc_phone,tc_address,tc_joining_date,tc_username,tc_password)"
                . "VALUES('$data[t_name]','$data[t_designation]','$data[dateOfBirth]','$data[gender]'
                ,'$data[religion]','$data[email]','$data[phone]','$data[address]','$data[join]','$data[username]'
                ,'$password_e')";
       
                $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
             echo ( mysqli_error($this->link));
        }
        else{
            $message="Teacher info save successfully";
            $_SESSION['message']=$message;
            header("location:view-teacher.php");
        }        
    }




   protected function convert_string($action, $string)
    {
     $password = '';
            $encrypt_method = "AES-256-CBC";
            $secret_key = 'eaiYYkYTysia2lnHiw0N0vx7t7a3kEJVLfbTKoQIx5o=';
            $secret_iv = 'eaiYYkYTysia2lnHiw0N0';
        // hash
           $key = hash('sha256', $secret_key);
          $initialization_vector = substr(hash('sha256', $secret_iv), 0, 16);

     if($string != '')
     {
            if($action == 'encrypt')
            {
            $password = openssl_encrypt($string, $encrypt_method, $key, 0, $initialization_vector);
            $password = base64_encode($password);


            } 
            if($action == 'decrypt') 
            {
            $password = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $initialization_vector);
            }
     }
     return $password;
    }







    
   
       public function view_all_teacher_info(){
          $query="SELECT * FROM teacher";
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





    
    
    /*
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
    */


   /* 
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
    
 */

 /*
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


*/
    public function check_teacher_username($username){

         $query = "SELECT * FROM teacher WHERE tc_username = '".$username."'";
         $run_query= mysqli_query($this->link, $query);

         return $run_query;
        

    }
    
    
    
    
    
    
    
    
}
