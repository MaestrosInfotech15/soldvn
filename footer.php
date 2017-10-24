<div class="container-fluid footer">
		
		<div class="container">
			
			<div class="col-sm-6">
				
				<p>@copyright 2017 Maestros Infotech</p>
				
			</div>
			
			<div class="col-sm-6 text-right">
				
				<p>Designed & Developed by : <a href="http://maestrosinfotech.com/index/">Maestros Infotech</a></p>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="modal fade" id="signup" role="dialog">
   
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">

			<button type="button" class="close" data-dismiss="modal">&times;</button>

			<div class="modal-body">

				<div class="col-sm-5">
					
					<div class="row">
						
						<div class="left_img_log">
							
							<h2>Sign up</h2>
							
							<img src="img/sa.png">
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-sm-7" >
					
					<div class="forme">
						
						<div class="input-group">
							
							<label>
								Username or email <span class="imp"></span>:
							</label>
							
							<input type="text" class="form-control">
							
						</div>
						
						<div class="input-group">
							
							<label>
								Password:
							</label>
							
							<input type="password" class="form-control">
							
						</div>
						
						<div class="input-group">
							
							<input type="submit" class="btn btn-login">
							
						</div>
						
					</div>
					
				</div>

			</div>

		  </div>

		</div>

	  </div>
	
	<div class="modal fade" id="login" role="dialog">
   
		<div class="modal-dialog">

		  <!-- Modal content-->
		  <div class="modal-content">

			<button type="button" class="close" data-dismiss="modal">&times;</button>

			<div class="modal-body">

				<div class="col-sm-5">
					
					<div class="row">
						
						<div class="left_img_log">
							
							<h2>Login</h2>
							
							<img src="img/sa.png">
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-sm-7" >
					
					<div class="forme">
						
						<div class="input-group">
							
							<label>
								Username or email <span class="imp"></span>:
							</label>
							
							<input type="text" class="form-control">
							
						</div>
						
						<div class="input-group">
							
							<label>
								Password:
							</label>
							
							<input type="password" class="form-control">
							
						</div>
						
						<div class="input-group">
							
							<input type="submit" class="btn btn-login">
							
						</div>
						
					</div>
					
				</div>

			</div>

		  </div>

		</div>

	  </div>
	
	<script>
	
		$(document).ready(function(){
			$(".dropdown").hover(            
				function() {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
					$(this).toggleClass('open');        
				},
				function() {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
					$(this).toggleClass('open');       
				}
			);
		});
		
	</script>
	
	<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
		
	</body>
</html>
