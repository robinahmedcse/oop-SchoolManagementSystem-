<?php 

                    if(isset($_POST['Submit'])){

                        // var_dump($_POST);
                        // die();
                      
                         $stu_parent->save_parent_info($_POST);
                     }
                    
                    
                    
                    ?>    
 
 
    <script>
  // alert(" filled out");

function parentValidateForm(formData) {
   
  if (formData.g_name.value == "") {
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
                <h3>Add Parent<small>Information</small></h3>
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
                       <h2>Parent Information<small>Form</small></h2> 
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
                            <a href="view-teacher.php" class="btn btn-warning ">Return View Parent</a>

                         </div>
                    </div>
 
                </div>
                    


                 <div class="x_content">
                 
                 
                 <form action="#" onsubmit="return parentValidateForm(this)" method="POST" class="form-horizontal form-label-left" 
                 enctype="multipart/form-data">
                     
                        <!--  name -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Student Guardian Name <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="g_name" name="g_name" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>
                        
                                    <!--  name -->
                             <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Student Father Name<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="f_name" name="f_name" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>
                          
                             <!--  name -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Student Mother Name<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="m_name" name="m_name" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>
                          


                  
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Father Profession<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="f_profession" name="f_profession" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>
                          
                             <!--  name -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Mother Profession<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="m_profession" name="m_profession" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>

                        
                               <!--  Address -->
                               <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for=""> Parents Address<span class="required" >*</span>
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


$(document).on('click', '#close-preview', function(){
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
           $('.content').css('padding-bottom', '100px');
        },
         function () {
           $('.image-preview').popover('hide');
           $('.content').css('padding-bottom', '20px');
        }
    );
});



        $(function() {
            // Create the close button
            var closebtn = $('<button/>', {
                type:"button",
                text: 'x',
                id: 'close-preview',
                style: 'font-size: initial;',
            });
            closebtn.attr("class","close pull-right");
            // Set the popover default content
            $('.image-preview').popover({
                trigger:'manual',
                html:true,
                title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
                content: "There's no image",
                placement:'bottom'
            });
            // Clear event
            $('.image-preview-clear').click(function(){
                $('.image-preview').attr("data-content","").popover('hide');
                $('.image-preview-filename').val("");
                $('.image-preview-clear').hide();
                $('.image-preview-input input:file').val("");
                $(".image-preview-input-title").text("File Browse");
            });
            // Create the preview image
            $(".image-preview-input input:file").change(function (){
                var img = $('<img/>', {
                    id: 'dynamic',
                    width:250,
                    height:200,
                    overflow:'hidden'
                });
                var file = this.files[0];
                var reader = new FileReader();
                // Set preview image into the popover data-content
                reader.onload = function (e) {
                    $(".image-preview-input-title").text("File Browse");
                    $(".image-preview-clear").show();
                    $(".image-preview-filename").val(file.name);
                    img.attr('src', e.target.result);
                    $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
                    $('.content').css('padding-bottom', '100px');
                }
                reader.readAsDataURL(file);
            });
        });

</script>



 <script>
 $(document).ready(function(){  
   $('#username').blur(function(){

     var username = $(this).val();

     $.ajax({
      url:'classes/tc_check.php',
      method:"POST",
      data:{user_name:username},
      success:function(data)
      {
        console.log(data);
          
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger">Username not available</span>');
        $('#add-tc-info').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success">Username Available</span>');
        $('#add-tc-info').attr("disabled", false);
       }


        }
     })

  });
 }); 
 </script>
