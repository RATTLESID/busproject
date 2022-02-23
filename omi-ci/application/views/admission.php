
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
                    <h1 class="h3 mb-4 text-gray-800">Student Admission</h1>

                    <form action="<?php echo base_url();?>ins-admission" method="post" enctype="multipart/form-data">
                       <p>STUDENT ID</p>
                      <p><input type="text" name="student_id" ></p>
                      <p>STUDENT NAME</p>
                      <p><input type="text" name="student_name" ></p>
                      <p>FATHER NAME</p>
                      <p><input type="text" name="father_name" ></p>
                      <p>MOTHER NAME</p>
                      <p><input type="text" name="mother_name" ></p>
                      <p>FULL ADDRESS</p>
                      <p><input type="text" name="address" ></p>
                      <p>MOBILE/PHONE NUMBER</p>
                      <p><input type="text" name="mobile_no" ></p>
                      <p>ADHAAR NUMBER</p>
                      <p><input type="text" name="adhaar" ></p>
                      <p>GENDER</p>
                      <p><label><input type="radio" name="gender"value="Male" >Male</label></p>
                      <p><label><input type="radio" name="gender"value="Female" >Female</label></p>
                      <p>DATE OF BIRTH</p>
                      <p><input type="text" name="dob" id="dob" ></p>
                      <p>PICKUP POINT</p>
                      <p><select name="pickup_point">
                        <option value="">-Select-</option>
                        <?php foreach($pickup as $p) { ?>
                        <option value="<?php echo $p->fee_id;?>"><?php echo $p->pickup_point;?> (<?php echo $p->busfee;?>)</option>
                        <?php } ?>

                      </select></p>
                      <p>STUDENT IMAGE</p>
                      <p><input type="file" name="student_image" ></p>

                      <p><input type="submit" name="register" value="Save" ></p>
                    

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
    $( "#dob" ).datepicker({
        changeMonth: true, 
    changeYear: true, 
    dateFormat: "yy-mm-dd",
    });
  } );
  </script>