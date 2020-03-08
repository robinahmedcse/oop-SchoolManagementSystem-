<?php

class stu_parent {
 
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
    
    
    public function save_parent_info($data){
       // session_start();
       
                $action = 'encrypt';
                $password_main=$data['password'];

              
                  // print_r($_FILES);
                 // echo'<br>';
                // $action = 'decrypt';
               // $password_d= $this->convert_string($action, $password);
              // echo   $password_d;
             // die();

            $password_e= $this->convert_string($action, $password_main);   
            

              $query="INSERT INTO parents(guardian_name,father_name,mother_name,father_profession,mother_profession ,
                      parents_address,parents_phone,parents_email,parents_username,parents_password)"
                  . "VALUES('$data[g_name]','$data[f_name]','$data[m_name]','$data[f_profession]'
                  ,'$data[m_profession]','$data[address]','$data[email]','$data[phone]','$data[username]',
                   '$password_e')";
                           



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




 
    



    
   
       public function view_all_parents_info(){
          $query="SELECT * FROM parents";
        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
             echo ( mysqli_error($this->link));
        }
        else{
              return $run_query;
            
        }    
        
    }


 


    public function find_parent_by_id($id){

        $query="SELECT * FROM parents WHERE parents_id='$id'";
        $run_query= mysqli_query($this->link, $query);
        if(!$run_query){
             echo ( mysqli_error($this->link));
        }
        else{
 
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

 
      public function delete_parent_info($catch) {
         //  echo $catch;
        $query="DELETE FROM parents WHERE parents_id='$catch'";
        $run_query= mysqli_query($this->link, $query);
        return $run_query;
        
        if(!$run_query){
             echo ( mysqli_error($this->link));
        }
        else{
         //   header('location:view.php');  
            
        } 
           
          
    }


 
    public function check_parent_username($username){

         $query = "SELECT * FROM parents WHERE parents_username = '".$username."'";
         $run_query= mysqli_query($this->link, $query);

         return $run_query;
        

    }
    
    
    
    
    
    
    
    
}
