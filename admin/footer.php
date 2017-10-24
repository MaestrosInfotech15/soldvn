</div>
</div>
 <div class="navbar navbar-fixed-bottom">
            <hr>

            <footer>

                <p>&copy; Maestros Infotech</p>

            </footer>

        </div>

        <!--/.fluid-container-->
  

      

       
        <script>

        $(function() {

            // Easy pie charts

            $('.chart').easyPieChart({animate: 1000});

        });

        </script>

    </body>

 

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.css"/>

 

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>



<script type="text/javascript">

    $(document).ready(function() {

    $('#examplesdfsf').DataTable( {

        "order": [[ 3, "asc" ]]

    } );

} );

</script>









<?php if(isset($_GET['msg'])){ ?>

<div class="alert alert-info" id="success-alert" style=" position: absolute;

    /* float: right; */

    right: 15px;

    top: 20px;

    z-index: 1200;">

    <button type="button" class="close" data-dismiss="alert" style="margin-left: 5px" onclick="didss()">  x  </button>

    <strong ><?php echo $_GET['msg'];?> </strong>

   

</div>

<script>

 $(document).ready (function(){

           // alert();

                window.setTimeout(function () { 

                

                            $("#success-alert").hide(); }, 8000);



                  });    







function didss(){

  $("#success-alert").hide();  

}





        

</script>



<?php } ?>







<script type="text/javascript">



 function update_status(st,id){







    jQuery.ajax({

   url: "update_status.php",

   type: "POST",

   data : "st="+st+"&id="+id,

   

   success: function(data){

     

  // alert(data);

   /* if(data==1){

 $("#rett"+id).addClass("selected_st");

    }else{

 $("#rett"+id).html("error");

    }*/



     $("#retttt").html("Status Updated ");



     window.setTimeout(function () { 

                

                            window.location.reload() }, 2000);

   

      },

     error: function(){}          

    }); 

 }



</script>