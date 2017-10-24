<?php include('header.php');



$setting = mysqli_fetch_array(mysqli_query($conn,"select * from user WHERE `id`='".$_GET['edit']."'"));

///print_r($setting);
if(isset($_POST['submit'])){

 extract($_POST);
 
 

$dsgfsf = mysqli_query($conn,"update `user` set `fname`='$fname',`lname`='$lname',`mobile`='$mobile',`username`='$username',`role`='$role' WHERE `id`='".$_GET['edit']."'");



  if($dsgfsf){
echo"Update Successfully";

   echo '<script>window.location="user.php?msg=updated.."</script>';


  }


}

?>








                <div class="span9" id="content">
                      <!-- morris stacked chart -->

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">User</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <span id="form_abc2_data"></span>
                                    <form class="form-horizontal" id="form_abc2" enctype="multipart/form-data" method="post">
                                      <fieldset>
                                        <legend>Edit User </legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">First Name </label>
                                          <div class="controls">
                                            <input type="text" name="fname" value="<?php echo $setting['fname']; ?>" required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Last Name </label>
                                          <div class="controls">
                                            <input type="text" name="lname" value="<?php echo $setting['lname']; ?>" required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        
                                      
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Mobile Number </label>
                                          <div class="controls">
                                            <input type="number" name="mobile" value="<?php echo $setting['mobile']; ?>"  required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Username </label>
                                          <div class="controls">
                                            <input type="text" name="username" value="<?php echo $setting['username']; ?>"  required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                               <div class="control-group">
                                          <label class="control-label" for="typeahead">Role </label>
                                          <div class="controls">
                                            <select type="text" name="role" required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                  <option value="<?php echo $setting['role'];?>" selected="selected"> 
                                  
                                    <?php $rol_user=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `role` WHERE `id`='".$setting['role']."'"));
									echo $rol_user['role'];
                                  
                                  ?>
                                  </option>                 
                                <?php $rol=mysqli_query($conn,"SELECT * FROM `role`");
								
								while($role=mysqli_fetch_array($rol)){
								
							
								?>
                                
                                  <option value="<?php echo $role['id'];?>"><?php echo $role['role'];?></option>            
                                            <?php }?>
                                            
                                            </select>
                                          
                                          </div>
                                        </div>
                                       
                                        <div class="form-actions">
                                          <button type="submit" name="submit" class="btn btn-primary">Submit </button>
                                          
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                     <!-- wizard -->
                    
	            <!-- /wizard -->

                     <!-- validation -->
                     <!-- /validation -->


                </div>
           <?php include('footer.php')?>
		   
           
       