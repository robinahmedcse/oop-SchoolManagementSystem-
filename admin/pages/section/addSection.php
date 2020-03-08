<?php 

 
$tc_run_query = $obj_class->view_all_teacher_info_for_class();
 
                                 
if(isset($_POST['Submit'])){

    // var_dump($_POST);
    // die();
  
     $obj_section->add_class_info($_POST);
 }



?>


 
 
    <script>
  // alert(" filled out");

function classValidateForm(formData) {
   
  if (formData.t_name.value == "") {
    alert("Name must be filled out");
    formData.t_name.focus();
    return false;
  }



  //end of function validateForm
}
</script>





   <div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Class <small>Information</small></h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                       <h2>Class Information<small>Form</small></h2> 
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="">
                      
                        <br><br>
                    </div> 




 

                    <?php
                      if (isset($_SESSION['message'])) {
                          ?>
                          <div class="text text-center text-success"><h2><?php echo $_SESSION['message']; ?></h2></div>
                          <?php
                      }
                      unset($_SESSION['message']);
                      
                      
                      if (isset($message)) {
                          ?>
                          <div class="text text-center text-success"><h2><?php echo $message; ?></h2></div>
                          <?php
                      }
                      unset($message);
                      ?>

              





                    <div class="class">
                      <div align="right">
                            <a href="view-class.php" class="btn btn-warning ">Return View Class</a>

                         </div>
                    </div>
 
                </div>
                    


                 <div class="x_content">
                 
                 
                 <form action="#" onsubmit="return classValidateForm(this)" method="POST" class="form-horizontal form-label-left" 
                 enctype="multipart/form-data">
                     
                        <!--  Class name -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Class Name <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="class_name" name="class_name" class="form-control col-md-7 col-xs-12" required>
                                 
                            </div>
                        </div>

                              <!--  Teacher Name -->
                              <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Teacher Name<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="teacher" id="teacher" class="form-control" required>
                                <option value="null" selected disabled  >Select Teacher Name</option>
                                
                                    <?php
                                    while ($all_teacher_info = mysqli_fetch_assoc($tc_run_query)) {
                                        ?>
                                        <option value="<?php echo $all_teacher_info['tc_id']; ?>"><?php echo $all_teacher_info['tc_name']; ?></option>
                                    <?php } ?> 
                                </select>
                            </div>
                        </div>

                               <!--  Note -->
                      <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Note<span class="required" >*</span>
                            </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="note" id="note" cols="5" rows="5" class="form-control col-md-7 col-xs-12" required></textarea>
                                 
                        </div>    
                      </div>



                        <br />

                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"> 
                                <input type="submit" name='Submit' value="Submit" id="add-tc-info" class="btn btn-success">
                            </div>
                        </div>

            

                        </form >
                 </div>   




            </div>


        </div>
    </div>
</div>









