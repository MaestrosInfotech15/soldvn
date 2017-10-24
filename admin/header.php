<?php

include('common/config.php');
if(empty($_SESSION['admin_id'])){
	
	header("location:login.php");
	
	}
?>


<!DOCTYPE html>
<html class="no-js">
    
    <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sold VN Admin Panel</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
       
          <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet" media="screen">
       
        
        <link href="assets/styles.css" rel="stylesheet" media="screen">
           <link href="    https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css "rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
      
    </head>
    
    <body style="background-image:url(bootstrap/img/background.jpg)">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
        
                
                
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php">Sold Vn Admin Panel</a>
                </div>
                <div class="dropdown">
          <span><button type="button" value="admin" class="btn_drp" title=""> Admin</button></span>
              <div class="dropdown-content">
             <a href="change_pass.php"> Change Password </a>
             </br>
              <a href="logout.php"> Logout</a>
               </div>
                </div>
              
            </div>
        </div>
        <div class="margindiv"></div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="active">
                            <a href="index.php"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>


                       <li>
                            <a href="user.php"><i class="icon-chevron-right"></i> User </a>
                        </li>

                         <li>
                            <a href="category1.php"><i class="icon-chevron-right"></i> Categories </a>
                        </li>

 <li>
                            <a href="product.php"><i class="icon-chevron-right"></i> Product </a>
                        </li>



                        
                    </ul>
                </div>