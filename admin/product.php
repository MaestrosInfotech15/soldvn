<?php include('header.php');

if(isset($_GET['delete'])){
	mysqli_query($conn,"DELETE FROM `product` WHERE `id`='".$_GET['delete']."'");
	echo "<script> window.location='product.php?msg=Delete Sucessful';</script>";

	
	
	}

?>
                <div class="span9" id="content">

                   
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Show Product</div>
                               <p style="padding-left:800px"> <a href="add_product.php"><button class="btn btn-primary">Add Product</button></a></p>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead>
						                <tr>
						                  <th>S.NO</th>
						                  <th>Name</th>
						                   <th>price</th>
                                          <th>condition</th>
                                          <th>location</th>
						                   <th>description</th>
                                          <th>Action</th>
						                </tr>
						              </thead>
						              <tbody>
                                      <?php 
									  $n='1';
                                      $setting = mysqli_query($conn,"select * from product");
									  while($service=mysqli_fetch_array($setting)){
                                      ?>
						                <tr>
						                 <td><?php echo $n++;?></td>
                                         
                                          <td><?php echo $service['name'];?></td>
                                          <td><?php echo $service['price'];?></td>
                                          <td><?php echo $service['condition'];?></td>
                                          <td><?php echo $service['location'];?></td>
                                          <td><?php echo $service['description'];?></td>
                                                               
                                   <td><a onclick="return confirm('Are You Sure')" href="?delete=<?php echo $service['id'];?>"><button class="btn btn-danger">Delete</button></a>
                                 <!-- <a href="edit_product.php?edit=<?php echo $service['id'];?>"><button class="btn btn-primary">Edit</button></a></td>
						           -->     </tr>
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