<?php include('header.php');

if(isset($_GET['delete'])){
	mysqli_query($conn,"DELETE FROM user WHERE `id`='".$_GET['delete']."'");
	echo "<script> window.location='user.php?msg=Delete Sucessful';</script>";

	
	
	}

?>
                <div class="span9" id="content">

                   
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Show User</div>
                                <p style="padding-left:800px"> <a href="add_user.php"><button class="btn btn-primary">Add User</button></a></p>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead>
						                <tr>
						                  <th>S.NO</th>
						                  <th>Name</th>
						                  <th>Email</th>
						                  <th>Password</th>
                                          <th>Mobile</th>
                                           <th>Username</th>
						                 
                                          <th>Action</th>
						                </tr>
						              </thead>
						              <tbody>
                                      <?php 
									  $n='1';
                                      $setting = mysqli_query($conn,"select * from user");
									  while($service=mysqli_fetch_array($setting)){
                                      ?>
                                      
						                <tr>
						                 <td><?php echo $n++;?></td>
                                         <td><?php echo $service['fname'].' '. $service['lname'];?></td>
                                         
                                          <td><?php echo $service['email'];?></td>
                                         <td><?php echo $service['password'];?></td>
                                          <td><?php echo $service['mobile'];?></td>
                                         <td><?php echo $service['username'];?></td>
                                                                                  
                                   <td><a onclick="return confirm('Are You Sure')" href="?delete=<?php echo $service['id'];?>"><button class="btn btn-danger">Delete</button></a>
                                  <a href="edit_user.php?edit=<?php echo $service['id'];?>"><button class="btn btn-primary">Edit</button></a></td>
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