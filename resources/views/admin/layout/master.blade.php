<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="admin/resources/img/favicon.ico" />
        <link rel="stylesheet"    href="admin/vendor/bootstrap/css/bootstrap.min.css">
        <link                     href="admin/resources/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link                     href="admin/resources/icons/themify-icons/themify-icons.css" rel="stylesheet">
        <link rel="stylesheet"    href="admin/vendor/animate.css">
        <link rel="stylesheet"    href="admin/resources/css/main-style.min.css">
        <link rel="stylesheet"    href="admin/resources/css/skins/all-skins.min.css">
        <link rel="stylesheet"    href="admin/resources/css/demo.css">
       
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112423372-1"></script>
         <script>
           window.dataLayer = window.dataLayer || [];
           function gtag(){dataLayer.push(arguments);}
           gtag('js', new Date());
         
           gtag('config', 'UA-112423372-1');
         </script>
</head>

<body class="skin-blue sidebar-mini">
   <div class="wrapper">
       <!-- Main Header -->
            <header class="top-menu-header">
                <!-- Logo -->
                <a href="index-2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>H</b>A</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Hospital</b>Admin</span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a class="sidebar-toggle fa-icon" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-top-menu">
                        <ul class="nav navbar-nav">
                            <!-- Navbar Search -->
                            <li>
                                <a data-toggle="collapse" data-target="#top-menu-navbar-search" aria-expanded="false">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <!-- /. Navbar Search -->
                            <!--Fullscreen-->
                            <li>  		
                                <a id="fullscreen-page" role="button"><i class="fa fa-arrows-alt"></i></a>
                            </li>
                            <!-- /. FulllScreen -->	
                            <!-- Messages-->
                            <li class="dropdown messages-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">1</span>
                                </a>
                                <ul class="dropdown-menu animated flipInX">
                                    <li class="header">1 message pending</li>
                                    <li>
                                        <!-- inner menu: contains the messages -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <!-- User Image -->
                                                        <img src="admin/resources/img/icons/icon-medical.png" class="img-circle" alt="User Image">
                                                    </div>
                                                    <!-- Message title and timestamp -->
                                                    <h4>
                                                        Laboratory 
                                                        <small><i class="fa fa-clock-o"></i> 10 mins</small>
                                                    </h4>
                                                    <!-- The message -->
                                                    <p>You have your blood test</p>
                                                </a>
                                            </li>
                                            <!-- /. message -->
                                        </ul>
                                        <!-- /.menu -->
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- /.messages-menu -->
                            <!-- Notifications Menu -->
                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">4</span>
                                </a>
                                <ul class="dropdown-menu animated flipInY">
                                    <li class="header">4 notifications</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start notification -->
                                                <a href="#">
                                                    <i class="fa fa-users text-green"></i> 5 new patients today
                                                </a>
                                            </li>
                                            <!-- /. notification -->
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-green"></i> 1 new doctor joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> problem with the computer
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> The meeting has been canceled
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <!-- Tasks Menu -->
                            <li class="dropdown patient-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-user-o"></i>
                                    <span class="label label-primary">6</span>
                                </a>
                                <ul class="dropdown-menu animated flipInX">
                                    <li class="header">6 patients today</li>
                                    <li>
                                        <!-- menu: Contains the visits of today -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start patient information-->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="admin/resources/img/icons/icon-patient.png" class="img-circle" alt="User Image">
                                                    </div>
                                                    <!-- information -->
                                                    <h4>
                                                        Adele Smith
                                                        <small  class="text-blue"><i class="fa fa-clock-o"></i> now</small>
                                                    </h4>
                                                    <!-- visit information -->
                                                    <p>Regular medical checkup</p>
                                                </a>
                                            </li>
                                            <!-- /. patient information-->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="admin/resources/img/icons/icon-patient2.png" class="img-circle" alt="User Image">
                                                    </div>
                                                    <!-- information -->
                                                    <h4>
                                                        John Martin
                                                        <small class="text-green"><i class="fa fa-clock-o"></i> 12:00 pm</small>
                                                    </h4>
                                                    <!-- visit information -->
                                                    <p>Regular medical checkup</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="admin/resources/img/icons/icon-patient.png" class="img-circle" alt="User Image">
                                                    </div>
                                                    <!-- information -->
                                                    <h4>
                                                        Alexa Hall
                                                        <small  class="text-red"><i class="fa fa-clock-o"></i> Cancelled</small>
                                                    </h4>
                                                    <!-- visit information -->
                                                    <p>Regular medical checkup</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <img src="admin/resources/img/icons/icon-patient2.png" class="img-circle" alt="User Image">
                                                    </div>
                                                    <!-- information -->
                                                    <h4>
                                                        John Martin
                                                        <small class="text-green"><i class="fa fa-clock-o"></i> 12:30 pm</small>
                                                    </h4>
                                                    <!-- visit information -->
                                                    <p>Regular medical checkup</p>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /.menu -->
                                    </li>
                                    <li class="footer"><a href="#">See All Patient</a></li>
                                </ul>
                            </li>
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" data-toggle="dropdown" aria-expanded="false">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Dr. Adrien<i class="fa fa-angle-down pull-right"></i></span>
                                    <!-- The user image in the navbar-->
                                    <img src="admin/resources/img/icons/icon-user.png" class="user-image" alt="User Image">
                                </a>
                                <ul class="dropdown-menu user-menu animated flipInY">
                                    <li><a href="doctor-profile.html"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="mailbox.html"><i class="fa fa-fw fa-envelope-o"></i> Inbox</a></li>
                                    <li><a href="lockscreen.html"><i class="ti-lock"></i> Lookscreen</a></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li class="divider"></li>
                                    <li><a href="sign-in.html"><i class="ti-power-off"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Form Navbar Search -->
                        <div class="collapse top-menu-navbar-search" id="top-menu-navbar-search">
                            <form>
                                <div class="form-group">
                                    <div class="input-search">
                                        <div class="input-group">
                                            <input type="text" id="navbar-search" name="search" class="form-control" placeholder="Search">
                                            <span class="input-group-addon">
                                                <a data-target="#top-menu-navbar-search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /. Form Navar Search -->
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="sidebar-left">
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="admin/resources/img/icons/icon-user.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="info">
                            <p>Dr. Adrien</p>
                            <p><small>Neurologist</small>
                            </p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                        <div class="report-today">
                            <h5>Today Report</h5>
                            <ul>
                                <li><span>6<i>Patients</i></span></li>
                                <li><span>3<i>Pending</i></span></li>
                                <li><span>3<i>Visits</i></span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview active"><a href="dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="treeview"><a href="#"><i class="fa fa-hospital-o"></i><span>Departments</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-user-md"></i><span>Doctors</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-stethoscope"></i><span>Patients</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-female"></i><span>Nurses</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-medkit"></i><span>Pharmacists</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-glass"></i><span>Laboratorists</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-money"></i><span>Accountants</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-phone-square"></i><span>Receptionists</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa ti-notepad"></i><span>Noticeboard</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa ti-email"></i><span>Contact Emails</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-user"></i><span>Account</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa ti-email"></i><span>Messages</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-user"></i><span>Profile</span></a></li>
                        <li class="treeview"><a href="#"><i class="fa fa-envelope"></i><span>Medicine Category</span></a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa ti-layout-media-center-alt"></i> <span>Monitor Hospital</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Payment History</a></li>
                                <li><a href="#">Allotment</a></li>
                                <li><a href="#">Blood Bank</a></li>
                                <li><a href="#">Blood Donor</a></li>
                                <li><a href="#">Medicine</a></li>
                                <li><a href="#">Operation Report</a></li>
                                <li><a href="#">Birth Report</a></li>
                                <li><a href="#">Death Report</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-list-alt"></i> <span>Invoices</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Add Invoice</a></li>
                                <li><a href="#">Manage Invoice</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-calendar"></i> <span>Schedule</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Add Schedule</a></li>
                                <li><a href="#">Schedule List</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-h-square"></i> <span>Insurance</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Add Insurance</a></li>
                                <li><a href="#">Insurance List</a></li>
                                <li><a href="#">Add Limit Approva</a></li>
                                <li><a href="#">Limit Approval List</a></li>                               
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa fa-credit-card-alt"></i> <span>Billing</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Add Service</a></li>
                                <li><a href="#">Service List</a></li>
                                <li><a href="#">Add Package</a></li>
                                <li><a href="#">Package List</a></li>                            
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa ti-face-smile"></i> <span>Human resources</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Add Employee</a></li>
                                <li><a href="#">Accountant List</a></li>
                                <li><a href="#">Laboratorist List</a></li>
                                <li><a href="#">Nurse List</a></li>                            
                                <li><a href="#">Pharmacist List</a></li>                            
                                <li><a href="#">Receptionist List</a></li>                            
                                <li><a href="#">Representative List</a></li>                            
                                <li><a href="#">Laboratorist List</a></li>                            
                                <li><a href="#">Laboratorist List</a></li>                            
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-plus-square"></i> <span>Medicine</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Manage Medicine</a></li>
                                <li><a href="#">Medicine Sales</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa ti-pulse"></i> <span>Beds</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Add Bed</a></li>
                                <li><a href="#">Bed List</a></li>
                                <li><a href="#">Bed Assign</a></li>
                                <li><a href="#">Bed Assign List</a></li>
                                <li><a href="#">Bed Assign List</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-hand-o-right"></i> <span>Appointment</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Appointment List</a></li>
                                <li><a href="#">Requested Appointment</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-usd"></i> <span>Payroll</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Create Payroll</a></li>
                                <li><a href="#">Payroll List</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa ti-settings"></i> <span>Settings</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">System Settings</a></li>
                                <li><a href="#">Manage Language</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa ti-mobile"></i> <span>SMS Settings</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Gateway Setting</a></li>
                                <li><a href="#">SMS Template</a></li>
                                <li><a href="#">SMS Schedule</a></li>
                                <li><a href="#">Send Custom SMS</a></li>
                                <li><a href="#">SMS Report</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-html5"></i> <span>Front-End</span>
                                <span class="pull-right-container"><i class="fa fa-angle-right pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Website Setting</a></li>
                                <li><a href="#">Slider</a></li>
                                 <li><a href="#">Home Page</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- /. sidebar-menu -->
                </section>
            </aside>
            
            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <span class="return-up"><i class="fa fa-chevron-up"></i></span>
                @yield('content')
            </div>
            <!-- /. content-wrapper -->
           <footer class="main-footer">
                <!-- Default to the left -->
                <strong>Copyright &copy; 2017 <a href="index.html">pixelcreattor</a>.</strong> All rights reserved.
                <!-- To the right -->
                <div class="pull-right hidden-xs"></div>
            </footer>
   </div>

   <script src="admin/vendor/jQuery/jquery-2.2.3.min.js"></script>
   <script src="admin/vendor/jquery-fullscreen/jquery.fullscreen-min.js"></script>
   <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
   <script src="admin/vendor/slimScroll/jquery.slimscroll.min.js"></script>
   <script src="admin/vendor/fastclick/fastclick.min.js"></script>
   <script src="admin/vendor/chartjs/Chart.min.js"></script>
   <script src="admin/vendor/sparkline/jquery.sparkline.min.js"></script>
   <script src="admin/resources/js/app.min.js"></script>
   <script src="admin/resources/js/demo.js"></script>
   <script src="admin/resources/js/pages/dashboard.js"></script>

</body>
    

</html>