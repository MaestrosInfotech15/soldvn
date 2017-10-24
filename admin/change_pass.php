<?php include('header.php');



///print_r($setting);
/*if(isset($_POST['submit'])){


 extract($_POST);
 $password=$_POST['password'];
 $pass=strlen($password); 
 
 	


$sql=mysqli_query($conn, "SELECT * FROM `user` WHERE `email`='$email'");
			$count=mysqli_num_rows($sql);
			
			if($count > 0)
			{
				$message='<span style="color:red">email already exist</span>';
			}
			 else if($pass <=5)
		{
		  $message="<span style='color:red'>Password length minimum 5 character long</span> "; 
		}
			else{


 $dsgf = mysqli_query($conn,"INSERT INTO `user`(`fname`,`lname`,`email`,`password`,`mobile`,`username`,`role`)VALUES('$fname','$lname','$email','$pass','$mobile','$username','$role')");

  if($dsgf){

$message="<span style='color:green'>Successfully</span>";
  $message= '<script>window.location="user.php?msg=add new text.."</script>';


  }
else{
$message='<span style="color:red">Failed</span>';
	
	}

}
}

*/?>




                <div class="span9" id="content">
                      <!-- morris stacked chart -->

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Change Password</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                           <span id="form_abc6_data"></span>

                                  <form class="form-horizontal" id="form_abc6"  enctype="multipart/form-data" method="post">
                                      <fieldset>
                                        <legend>Change Password </legend>
                                        <?php //echo $$message; ?>
                                         
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Current Password </label>
                                          <div class="controls">
                                            <input type="password" name="cpassword" required class="span6" placeholder="Current Password" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">New Password </label>
                                          <div class="controls">
                                            <input  type="password" name="npwd" required placeholder="New Password" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead"> Re-enter New Password </label>
                                          <div class="controls">
                                            <input type="password" name="confirm" placeholder="Re-enter New Password" required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
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
		   
           
        </html>
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
$(document).ready(function (abc6) {
 $("#form_abc6").on('submit',(function(abc6) {

$("#form_abc6_img").html('<img src="img/4.gif" style="width: 30px;hight: 30px;">');

  abc6.preventDefault();
  $.ajax({
         url: "php/change_pass.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   success: function(data){
   $("#form_abc6_data").html(data);
      },
     error: function(){}           
    });
 }));
});
</script>
