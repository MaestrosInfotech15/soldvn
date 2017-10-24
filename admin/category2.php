<?php include('header.php');



if(isset($_GET['delete'])){

	mysqli_query($conn,"DELETE FROM `category2` WHERE `id`='".$_GET['delete']."'");

	echo "<script> window.location='category2.php?cate_id= ".$_GET['cate_id']." & ?msg=Delete Sucessful';</script>";



	

	

	}



?>

                <div class="span9" id="content">



                   

                    <div class="row-fluid">

                        <!-- block -->

                        <div class="block">

                            <div class="navbar navbar-inner block-header">

                                <div class="muted pull-left">Show Category2</div>
  <div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary btn-lg btun" data-toggle="modal" data-target="#myModal">Add Category</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
        <?php

///print_r($setting);
if(isset($_POST['submit'])){


 extract($_POST);
$name=mysqli_real_escape_string($conn, $name);
 $dsgf = mysqli_query($conn,"INSERT INTO `category1`(`name`)VALUES('$name')");

  if($dsgf){

$message="<span style='color:green'>Successfully</span>";
  echo '<script>window.location="category1.php?msg=add new text.."</script>';


  }
else{
echo'<span style="color:red">Failed</span>';
	
	}

}

?>
              <div class="block">
                            <div class="navbar navbar-inner block-header ">
                                <div class="muted pull-left">Add Category2</div>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
<!--                                <span id="form_abc2_data"></span>

-->                                    <form class="form-horizontal"  enctype="multipart/form-data" method="post">
                                     
                                        
                                        
                                        
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead"> Name </label>
                                          <div class="controls">
                                            <input type="text" name="name" required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                             <button type="submit" name="submit" class="btn btn-primary btun1">Submit </button>
                                          
                                          </div>
                                         
                                        
                                        
                                    </form>

                                </div>
                            </div>
                         
                        </div>
                        <!-- /block -->
        </div>
       
      </div>
      
    </div>
  </div>
  
</div>

                            </div>

                            <div class="block-content collapse in">

                                <div class="span12">

  									<table class="table table-bordered">

						              <thead>

						                <tr>

						                  <th>S.NO</th>

						                  <th>Name</th>

						                   <th>View</th>

                                          <th>Action</th>

						                </tr>

						              </thead>

						              <tbody>

                                      <?php 

									  $n='1';

                                $setting = mysqli_query($conn,"select * from `category2` WHERE `category1_id`='".$_GET['cate_id']."'");

									  while($service=mysqli_fetch_array($setting)){

                                      ?>

						                <tr>

						                 <td><?php echo $n++;?></td>

                                         

                                          <td><?php echo $service['name'];?></td>

                                                   <td><a href="category3.php?cate2_id=<?php echo $service['id'];?>"><button class="btn btn-primary">View</button></a></td>                                                             

<td><a onclick="return confirm('Are You Sure')" href="?delete=<?php echo $service['id'];?>&cate_id=<?php echo $_GET['cate_id'];?>"><button class="btn btn-danger">Delete</button></a>

                                  <a href="edit_category2.php?edit=<?php echo $service['id'];?>"><button class="btn btn-primary">Edit</button></a></td>

						                </tr>

                                       <?php }?>

                                       

						              </tbody>

						            </table>

                                </div>

                            </div>

                        </div>

                        <!-- /block -->

                    </div>



                    



                    



                    



                     



                     

                </div>

<?php include('footer.php')?>