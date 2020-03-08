

<?php 
 
      $run_query = $obj_stu_group-> view_all_group_info();
 

    //   while ($r = mysqli_fetch_object($run_query) ) {
    //    echo $r->section_id;

    //   }
 

 
?>

       

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
               <h1></h1>
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
                       <h2>Student Group Information<small></small></h2> 
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
                                      <div class="alert alert-success" role="alert">    
                                         <h1>  <?php echo $_SESSION['message']; ?>  </h1>
                                     </div>
      
                                    <?php   }      unset($_SESSION['message']);   ?>
                                    
                     







                    <div class="class">
                      <div align="right">
                            <a href="add-student-group.php" class="btn btn-primary ">Add Group</a>

                         </div>
                    </div>

                    <div class="x_content">
                        <div class="table-responsive">
                        <table  id="example"  class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th width="33%">ID</th>
                                    <th width="33%">Group Name </th>
                                  
                                    <th width="33%">Action</th>
                                </tr>
                            </thead> 
                            <?php while ($r = mysqli_fetch_object($run_query) ) {  ?> 
                                
                                <tr>
                                    <td><?php  echo $r->group_id; ?></td>  
                                    <td><?php  echo $r->group_name; ?></td>
                                
 
                                    <td>
                                       
                                       <a href="#" class="btn btn-xs btn-primary edit" id="<?php  echo $r->group_id; ?>"> Edit</a>
                                      <a href="#" class="btn btn-xs btn btn-danger delete" id="<?php  echo $r->group_id; ?>">Delete</a>
                                    
                                    </td>
                                </tr>
                                
                            <?php   }
                                ?> 
                            
                        </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>



<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script> 

 
 
 

<script>
$(document).on('click', '.edit',function() {
     
                  alert("Sorry!!! Edit function not Active right now");
} );
</script> 






<script>
   $(document).on('click', '.delete', function(){
    var id = $(this).attr('id');
 

        Dialogify.confirm("<h3 class='text-danger'><b>Are you sure you want to remove this data?</b></h3>", {
                ok:function(){
                        $.ajax({
                        url:"classes/group/group_check.php",
                        method:"POST",
                        data:{group_id:id},
                        success:function(data)   {
                            Dialogify.alert('<h3 class="text-success text-center"><b>Data has been deleted</b></h3>');
              
                                setTimeout(function() {
                                        document.location.reload()
                                }, 1000)
                            }
                         })
                     },
             cancel:function(){
             this.close();
        }
        });
        
 });
</script> 



