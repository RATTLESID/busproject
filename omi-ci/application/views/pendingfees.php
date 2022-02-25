
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
                    <h1 class="h3 mb-4 text-gray-800">Pending Fees</h1>

                    <table class="table">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Mobile/Phone No.</th>
        <th>Pickup-Point(amount)</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach ($row as $r){ ?>
      <tr>
       <td> <?php echo $r->student_id; ?></td>
       <td> <?php echo $r->student_name; ?></td>

       <td> <?php echo $r->mobile_no; ?></td>
       <td> <?php echo $r->pic; ?> (<?php echo $r->busfee; ?>)</td>
      </tr>
      <?php } ?>

    </tbody>
  </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                 <?php $this->load->view("inc/footer");?>