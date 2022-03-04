 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Fee Management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Fee Management</h6>
                        <a class="collapse-item" href="<?php echo base_url(); ?>feesetup/">Fee Setup</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>feeselect/">Fee Listing</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>busfeereceipts/">Fee Receipts</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>showfeereceipt/">Bus Fee Statement</a>
                        

                        
                    </div>

                </div>
            </li>
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree"
                    aria-expanded="true" aria-controls="collapsethree">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Student Management</span>
                </a>
                <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Student Management</h6>
                        <a class="collapse-item" href="<?php echo base_url(); ?>admission/">Student Admission</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>selectadmission/">Admission Database</a>
                        
                    </div>
                    
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>pendingfees/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pending Fees</span></a>
            </li>

        


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour"
                    aria-expanded="true" aria-controls="collapsefour">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Fund Management</span>
                </a>
                <div id="collapsefour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?php echo base_url(); ?>fundtransfer">Fund Transfer</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>list-fundtransfer">List Fund Transfer</a>
                        <a class="collapse-item" href="<?php echo base_url(); ?>pettycash">Petty Cash</a>
                        
                    </div>
                    
                </div>
            </li>

            

            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>