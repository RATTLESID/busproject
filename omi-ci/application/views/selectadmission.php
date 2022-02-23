

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
                    <h1 class="h3 mb-4 text-gray-800">Fee Listing</h1>
                    <div class="table-responsive">
                    <table class="table">
    <thead>
      <tr>
        <th>Student Id</th>
        <th>Name</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Address</th>
        <th>Mobile no</th>
        <th>Adhaar</th>
        <th>Gender</th>
        <th>Date Of Birth</th>
        <th>Pickup Point</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Edit</th>
        
      </tr>
    </thead>
    <tbody>
    <?php foreach($row as $r){ ?>
      <tr>
        <td><?php echo $r->student_id; ?></td>
        <td><?php echo $r->student_name;?></td>
        <td><?php echo $r->father_name;?></td>
        <td><?php echo $r->mother_name;?></td>
        <td><?php echo $r->address;?></td>
        <td><?php echo $r->mobile_no;?></td>
        <td><?php echo $r->adhaar;?></td>
        <td><?php echo $r->gender;?></td>
        <td><?php echo $r->dob;?></td>
        <td><?php echo $r->pic;?> (<?php echo $r->busfee;?>) </td>
        <td><img src="<?php echo base_url();?>student_images/<?php echo $r->student_image;?>" style="width:120px;"></td>
        <td><a onclick="return confirm('are you sure?');" class="btn btn-danger" href="
        <?php echo base_url();?>deleteadmission/<?php echo $r->sid; ?>">DELETE</a></td>
        <td><a class="btn btn-primary" href="<?php echo base_url();?>editadmission/<?php echo $r->sid;?>">EDIT</a></td>
        
        
      </tr>

      <?php } ?>
     
    </tbody>
  </table>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                 <?php $this->load->view("inc/footer");?>