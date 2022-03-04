
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
                    <h1 class="h3 mb-4 text-gray-800">Fund Transfer Database</h1>


                    <div class="container">
            
  <table class="table">
    <thead>
      <tr>
        <th>Date From</th>
        <th>Date To</th>
        <th>Fund Transfer Date</th>
        <th>Amount</th>

      </tr>
    </thead>
    <?php foreach($row as $r){?>
    <tbody>
        <td><?php echo date("d-m-Y",strtotime($r->f_from));?></td>
        <td><?php echo date("d-m-Y",strtotime($r->f_to));?></td>
        <td><?php echo date("d-m-Y",strtotime($r->pay_date));?></td>
        <td><?php echo $r->f_amount;?></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                 <?php $this->load->view("inc/footer");?>