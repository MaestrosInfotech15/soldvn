<!DOCTYPE html>

<html>

  <head>

    <title>Admin Login</title>

    <!-- Bootstrap -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

    <link href="assets/styles.css" rel="stylesheet" media="screen">

     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->

    <!--[if lt IE 9]>

      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  </head>

  <body id="login" style="background-image:url(bootstrap/img/background.jpg)">
   <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                
                <div class="web_logo">
                <img src="bootstrap/img/sold.png">
                </div>
        
                
                
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand brndbar" href="index.php">Sold Vn Admin Panel</a>
                </div>
                </div>
                </div>
    <div class="container">



      <form class="form-signin" method="post" id="form_abc1" enctype="multipart/form-data">

        <h2 class="form-signin-heading">Please sign in</h2>

        <span id="form_abc1_data"></span>

        <input type="text" name="email" class="input-block-level" required placeholder="Username Or Email address">

        <input type="password" name="password" class="input-block-level" required placeholder="Password">

        <label class="checkbox">

          <input type="checkbox" value="remember-me"> Remember me

        </label>

        <button class="btn btn-large btn-primary signbtn" type="submit" name="submit">Sign in</button>

      </form>



    </div> <!-- /container -->

    <script src="vendors/jquery-1.9.1.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>

</html><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<script>



$(document).ready(function (abc1) { 



 $("#form_abc1").on('submit',(function(abc1) {







$("#form_abc1_data").html('<img src="common/img/pro.gif" style="width: 30px;hight: 30px;">');







  abc1.preventDefault();



  $.ajax({



         url: "php/login.php",



   type: "POST",



   data:  new FormData(this),



   contentType: false,



         cache: false,



   processData:false,



   success: function(data){



   $("#form_abc1_data").html(data);



      },



     error: function(){}          



    });



 }));



});







</script>   