
<?php $this->load->view("inc/header");?>
        <!-- Sidebar -->
       <?php $this->load->view("inc/menu");?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                  <?php $this->load->view("inc/top");?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Fund Transfer</h1>
                      
                    <form action="<?php echo base_url();?>fundtransferdata" method="post" >
                   <p>Fund From
                   <input type="text" name="f_from" id="f_from">  Fund To <input type="text" name="f_to" id="f_to"> </p>

                   <p>
                      Amount:  <input type="text" name="total" readonly id="calajax"/>
                   </p>
                   <p><input type="button" name="calculate" value="calculate" onclick="totalcalculator(this.value);"></p>


                   <p><input type="submit" name="save"></p>





                    </form>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            </div>
                 <?php $this->load->view("inc/footer");?>

                 <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  
 
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#f_from" ).datepicker({
        changeMonth: true, 
    changeYear: true, 
    dateFormat: "yy-mm-dd",
    });
  } );
  </script>

<script>
  $( function() {
    $( "#f_to" ).datepicker({
        changeMonth: true, 
    changeYear: true, 
    dateFormat: "yy-mm-dd",
    });
  } );
  </script>

  <script>
  function totalcalculator(){

    var f_from=$("#f_from").val();
    var f_to=$("#f_to").val();

    var fd=new FormData();
    fd.append("f_from",f_from);
    fd.append("f_to",f_to);

    $.ajax({
      
         url:"<?php echo base_url();?>insfundtransfer",
         type:'POST',
         data:fd,
         contentType:false,
         processData:false,

         success:function(resp){


            $("#calajax").val(resp);
         }



    })
  



  }
     
  </script>