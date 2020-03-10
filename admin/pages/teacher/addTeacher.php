<?php 

 
                                        
if(isset($_POST['Submit'])){

    // var_dump($_POST);
    // die();
  
     $object_teacher->save_teacher_info($_POST);
 }



?>


 

            
 
 
    <script>
  // alert(" filled out");

function validateForm(formData) {
   
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
                <h3>Add Teacher<small>Information</small></h3>
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
                       <h2>Teachers Information<small>Form</small></h2> 
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
                            <a href="view-teacher.php" class="btn btn-warning ">Return View teacher</a>

                         </div>
                    </div>
 
              
                    


                 <div class="x_content">
                 
                 
                 <form action="#" onsubmit="return validateForm(this)" method="POST" class="form-horizontal form-label-left" 
                 enctype="multipart/form-data">
                     
                        <!--  name -->
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Teacher Name <span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="t_name" name="t_name" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>
                        
                             <!--  Designation -->
                             <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Designation<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="t_designation" name="t_designation" class="form-control col-md-7 col-xs-12" >
                                 
                            </div>
                        </div>
                          

                              <!--  Dob -->
                              <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Date of birth<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="col-md-12">
                                    <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_1 xdisplay">
                                            <div class="calendar left single" style="display: block;">
                                                <div class="daterangepicker_input">
                                                <input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;">
                                                        <i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i>
                                                    <div class="calendar-time" style="display: none;">
                                                        <div> </div>
                                                <i class="fa fa-clock-o glyphicon glyphicon-time"></i>
                                                    </div>
                                                </div>
                                    <div class="calendar-table">
                                            <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                <th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th>
                                                <th colspan="5" class="month">Oct 2016</th>
                                                <th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th>
                                                </tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead>
                                                <tbody><tr><td class="weekend off available" data-title="r0c0">25</td>
                                                <td class="off available" data-title="r0c1">26</td>
                                                <td class="off available" data-title="r0c2">27</td>
                                                <td class="off available" data-title="r0c3">28</td>
                                                <td class="off available" data-title="r0c4">29</td>
                                                <td class="off available" data-title="r0c5">30</td>
                                                <td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>


                                        <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                            <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left" name="dateOfBirth" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
                                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                            </div>
                                            </div>
                                        </div>
                                        </fieldset>

                                    </div>
                                 
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
                                </select>
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

                            

                               <!--  Address -->
                               <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Address<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <textarea name="address" id="address" cols="5" rows="5" class="form-control col-md-7 col-xs-12" ></textarea>
                                 
                            </div>
                            </div>

 



                                  <!--  joining Date -->

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="">Joining Date<span class="required" >*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                    

                                    <div class="col-md-12">
                                        <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_4 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>


                                        <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                            <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                                                <input type="text" class="form-control has-feedback-left"  name="join"id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
                                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                            </div>
                                            </div>
                                        </div>
                                        </fieldset>
                                    </div>

                              <!-- +-->
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
      url:'classes/teacher/tc_check.php',
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
