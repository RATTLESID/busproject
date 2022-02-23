
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
                    <h1 class="h3 mb-4 text-gray-800">Bus fee Statement</h1>

                    <table class="table">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student Image </th>
        <th>Student Id</th>
        <th>Phone No</th>
        <th>Pickup point (Amount) </th>
        <th>Date(FROM) </th>
        <th>Date (TO) </th>
        <th>Print </th>

      
        
      </tr>
    </thead>
    <tbody>
        <?php foreach($row as $r){?>
            <tr>
        <td><?php echo $r->student_name; ?></td>
        <td><img src="<?php echo base_url();?>student_images/<?php echo $r->student_image;?>" style="width:120px;"></td>
        <td><?php echo $r->student_id; ?></td>
        <td><?php echo $r->mobile_no;?></td>
        <td><?php echo $r->pic; ?> (<?php echo $r->amount; ?>)</td>
        <td><?php echo date("d-m-Y",strtotime($r->s_from)); ?></td>
        <td><?php echo date("d-m-Y",strtotime($r->s_to)); ?></td>
        <td><a target="_blank" class="btn btn-primary" href="<?php echo base_url();?>printreceipt/<?php echo $r->receipt_id;?>">PRINT</a></td>
    


        </tr>


      <?php } ?>
    </tbody>
  </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                 <?php $this->load->view("inc/footer");?>