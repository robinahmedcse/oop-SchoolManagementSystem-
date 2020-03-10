<?php 

$run_query_class= $obj_student->get_all_class_list();



                                        
if(isset($_POST['Submit'])){

    // var_dump($_POST);
    // die();
  
     $object_teacher->save_teacher_info($_POST);
 }



?>


 

            
 
 
    <script>
  // alert(" filled out");

function studentValidateForm(formData) {
   
  if (formData.stu_name.value == "") {
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
                <h3>Add student <small>Information</small></h3>
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
                       <h2>Student Information<small>Form</small></h2> 
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
                            <a href="view-student.php" class="btn btn-warning ">Return View Student</a>

                         </div>
                    </div>
 
                </div>
                    


                 <div class="x_content">
                 
                 
                 <form action="#" onsubmit="return studentValidateForm(this)" method="POST" class="form-horizontal form-label-left" 
                 enctype="multipart/form-data">
                     
                        <!--  name -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Student Name <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="stu_name" name="stu_name" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>


                        <!--  DOB --> 
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Date of Birth <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="" name="" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>



                             <!--  Gender --> 
                             <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" id="gender" value="Male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" id="gender" value="Female"> Female
                            </label>
                          </div>
                        </div>
                      </div>

                      
                              <!--  Religion -->
                              <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Religion<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="religion" id="religion" class="form-control" required>
                                <option value="null" selected disabled  >Select Religion</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="BUDDHISM">BUDDHISM</option>
                                    <option value="CHRISTIANITY">CHRISTIANITY</option>
                                    <option value="HINDUISM">HINDUISM</option>
                                    <option value="JAINISM">JAINISM</option>
                                    <option value="JUDAISM">JUDAISM</option>
                                    <option value="OTHERS">OTHERS</option>
                                    <option value="SIKHISM">SIKHISM</option>
                                    <option value="SIKHISM">SIKHISM</option>
                                </select>
                            </div>
                        </div>

                        
                              <!--  Blood -->
                              <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Blood Group<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="religion" id="religion" class="form-control" required>
                                <option value="null" selected disabled  >Select Blood Gorup</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>






                              <!--  Guardian -->
                              <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Guardian <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="guardian" id="religion" class="form-control" required>
                                <option value="null" selected disabled  >Select Religion</option>
                                    <option value="x">x</option>
                                  
                                </select>
                            </div>
                        </div>

                        
    
    
                               <!--  Address -->
                               <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Address<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="address" id="address" cols="5" rows="5" class="form-control col-md-7 col-xs-12" ></textarea>
                                 
                            </div>
                            </div>
                        
                         


                              <!--  Email -->
                              <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Email<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" name="email" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>

                        

                        
                              <!--  phone -->
                              <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Phone<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="phone" name="phone" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>



                              <!--  photo    -->

                              <div class="form-group">                      
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for=""> Photo</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group image-preview" data-original-title="" title="">
                                            <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-sx-info image-preview-clear" style="display:none;">
                                                    <span class="fa fa-remove"></span>   Clear     
                                                  </button>
                                                <div class=" image-preview-input">
                                                    <input  type="file"  accept="image/png, image/jpeg, image/jpeg" 
                                                    class="btn btn-success" name="photo">
                                                </div>
                                            </span>
                                            <br>
                                          
                                        </div>
                                        <div>
                                        <span style="color:red;">Note:Image size not more then 500 KB</span>
                                        </div>
                                </div>
                            </div>



                            




<!-- _________________________________________________________________________________________________________________________ -->


                <!--  Class -->
                <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Class <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="class" id="class" class="form-control" required>
                                <option value="null" selected disabled  >Select </option>
                                run_query_class
                                <?php while( $all_class_info=mysqli_fetch_assoc($run_query_class) ){?>
                                    <option value="<?php echo $all_class_info['class_id']?>"><?php echo $all_class_info['class_name']?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>




                <!--  Section -->
                <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Section <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="" id="" class="form-control" required>
                                <option value="null" selected disabled  >Select </option>
                                    <option value=" X"> X</option>
                                  
                                </select>
                            </div>
                        </div>

                             <!--  group -->
                <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Group <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="" id="" class="form-control" required>
                                <option value="null" selected disabled  >Select </option>
                                    <option value=" X"> X</option>
                                  
                                </select>
                            </div>
                        </div>



                             <!--  Optional Subject  -->
                             <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Optional Subject<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <select name="" id="" class="form-control" required>
                                <option value="null" selected disabled  >Select </option>
                                    <option value=" X"> X</option>
                                  
                                </select>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Register NO <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="" name="" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Roll NO <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="" name="" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>






<!-- _______________________________________________________________________________________________________________________ -->


   
                            
                                  <!--  user name  -->

                                  <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Username<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="username" name="username" class="form-control col-md-7 col-xs-12" >
                                <span id="availability"></span>
                            </div>
                            </div>

                            
                                  <!--  password   -->

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Password<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="password" name="password" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
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








<script>


// $(document).on('click', '#close-preview', function(){
//     $('.image-preview').popover('hide');
//     // Hover befor close the preview
//     $('.image-preview').hover(
//         function () {
//            $('.image-preview').popover('show');
//            $('.content').css('padding-bottom', '100px');
//         },
//          function () {
//            $('.image-preview').popover('hide');
//            $('.content').css('padding-bottom', '20px');
//         }
//     );
// });



//         $(function() {
//             // Create the close button
//             var closebtn = $('<button/>', {
//                 type:"button",
//                 text: 'x',
//                 id: 'close-preview',
//                 style: 'font-size: initial;',
//             });
//             closebtn.attr("class","close pull-right");
//             // Set the popover default content
//             $('.image-preview').popover({
//                 trigger:'manual',
//                 html:true,
//                 title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
//                 content: "There's no image",
//                 placement:'bottom'
//             });
//             // Clear event
//             $('.image-preview-clear').click(function(){
//                 $('.image-preview').attr("data-content","").popover('hide');
//                 $('.image-preview-filename').val("");
//                 $('.image-preview-clear').hide();
//                 $('.image-preview-input input:file').val("");
//                 $(".image-preview-input-title").text("File Browse");
//             });
//             // Create the preview image
//             $(".image-preview-input input:file").change(function (){
//                 var img = $('<img/>', {
//                     id: 'dynamic',
//                     width:250,
//                     height:200,
//                     overflow:'hidden'
//                 });
//                 var file = this.files[0];
//                 var reader = new FileReader();
//                 // Set preview image into the popover data-content
//                 reader.onload = function (e) {
//                     $(".image-preview-input-title").text("File Browse");
//                     $(".image-preview-clear").show();
//                     $(".image-preview-filename").val(file.name);
//                     img.attr('src', e.target.result);
//                     $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
//                     $('.content').css('padding-bottom', '100px');
//                 }
//                 reader.readAsDataURL(file);
//             });
//         });

</script>



 <script>

//  $(document).ready(function(){  
//    $('#username').blur(function(){

//      var username = $(this).val();

//      $.ajax({
//       url:'classes/teacher/tc_check.php',
//       method:"POST",
//       data:{user_name:username},
//       success:function(data)
//       {
//         console.log(data);
          
//        if(data != '0')
//        {
//         $('#availability').html('<span class="text-danger">Username not available</span>');
//         $('#add-tc-info').attr("disabled", true);
//        }
//        else
//        {
//         $('#availability').html('<span class="text-success">Username Available</span>');
//         $('#add-tc-info').attr("disabled", false);
//        }


//         }
//      })

//   });
 //}); 
 </script>
