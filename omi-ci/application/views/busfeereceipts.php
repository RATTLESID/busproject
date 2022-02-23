
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
                    <h1 class="h3 mb-4 text-gray-800">Buss fee receipts</h1>


                    <form action="<?php echo base_url(); ?>ins-busfeereceipts" method="post" >
                       
                    <p>Student Name-ID (Fee)</p>
                    <p><select name="student_nid">
                        <option value="">-Select-</option>
                        <?php foreach($std as $s) { ?>
                        <option value="<?php echo $s->sid; ?>"><?php echo $s->student_name; ?>-<?php echo $s->student_id; ?> (<?php echo $s->busfee; ?>)</option>

                        <?php } ?>
                    </select></p>
                <p>SERVICE FROM <input type="text" name="s_from" id="s_from"> TO <input type="text" name="s_to" id="s_to"></p>

                <p>PAYMENT METHOD</p>
                  
                <p><label><input type="radio" name="payment" value="cash payment">Cash Payment</label></p>
                <p><label><input type="radio" name="payment" value="cheque payment">Cheque Payment</label></p>
                <p><label><input type="radio" name="payment" value="online payment">Online Payment</label></p>

                <p>REMARKS</p>
                <P><input type="text" name="remarks"></P>


                <p><input type="submit" name="save" value="save"></p>


              


                    



                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                 <?php $this->load->view("inc/footer");?>

 <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  
 
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#s_from" ).datepicker({
        changeMonth: true, 
    changeYear: true, 
    dateFormat: "yy-mm-dd",
    });
  } );
  </script>

<script>
  $( function() {
    $( "#s_to" ).datepicker({
        changeMonth: true, 
    changeYear: true, 
    dateFormat: "yy-mm-dd",
    });
  } );
  </script>