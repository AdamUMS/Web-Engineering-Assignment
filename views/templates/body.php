<!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

<body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Ryan University | Student Portal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>Register">Register</a></li> -->

                <li class="nav-item row ml-2">
                  <?php if ($this->session->userdata('nama')) { ?>
                    <a class="nav-link" href="<?php echo base_url('auth/logout')?>">Welcome, <?php echo $this->session->userdata('nama') ?><span class="btn btn-sm btn-warning" style="margin-left:15px;">Logout</span></a>

                        <?php } else { ?>
                             <a class="nav-link" href="<?php echo base_url('auth/login')?>"><span class="btn btn-sm btn-success">Login</span></a>

                        <?php } ?>
                    </li>

                    </ul>
                </div>
            </div>
        </nav>
       <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url() ?>Dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Profile')?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Student Profile</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Vaccine')?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Vaccination Record</span></a>
            </li>

            
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Course')?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Personal Course Planner</span></a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Evaluation')?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Course Evaluation</span></a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('CourseRegistration')?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Course Registration</span></a>
            </li>


            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('studentbooking')?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Student Booking</span></a>
            </li>



        

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <br>

            </div>
            <!-- End of Main Content -->

