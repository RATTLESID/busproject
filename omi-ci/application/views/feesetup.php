
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
                    <h1 class="h3 mb-4 text-gray-800">Fee Setup</h1>
                    <form action="<?php echo base_url();?>feeinsert" method="post">
                    	<p>Create Pickup Point Name</p>
                    	<p><input type="text" name="pickup_point"></p>

                    	<p>Monthly Bus Fee Amount</p>
                    	<p><input type="number" name="busfee"></p>

                    	<p><input type="submit" name="save"></p>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                 <?php $this->load->view("inc/footer");?>